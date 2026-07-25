<?php

namespace App\Services;

use App\Models\CustomerUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientMagicLinkService
{
    /**
     * Generate a single-use magic login URL for a customer user.
     */
    public function generateMagicLink(CustomerUser $customerUser, string $purpose = 'portal_access', int $ttlMinutes = 15): string
    {
        $plainToken = Str::random(40);
        $tokenHash = hash('sha256', $plainToken);

        DB::table('client_access_tokens')->insert([
            'customer_user_id' => $customerUser->id,
            'token_hash'       => $tokenHash,
            'purpose'          => $purpose,
            'expires_at'       => now()->addMinutes($ttlMinutes),
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        $clientDomain = config('domains.client', 'client.morabangun.com');
        $scheme = request()->getScheme() ?? 'https';

        return "{$scheme}://{$clientDomain}/masuk/{$plainToken}";
    }

    /**
     * Validate and consume a magic token, returning the associated CustomerUser if valid.
     */
    public function consumeMagicToken(string $plainToken): ?CustomerUser
    {
        $tokenHash = hash('sha256', $plainToken);

        $record = DB::table('client_access_tokens')
            ->where('token_hash', $tokenHash)
            ->whereNull('used_at')
            ->whereNull('revoked_at')
            ->where('expires_at', '>', now())
            ->first();

        if (!$record) {
            return null;
        }

        // Mark as used
        DB::table('client_access_tokens')
            ->where('id', $record->id)
            ->update([
                'used_at' => now(),
                'ip'      => request()->ip(),
            ]);

        return CustomerUser::find($record->customer_user_id);
    }
}
