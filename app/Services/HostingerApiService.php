<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HostingerApiService
{
    protected ?string $apiToken;
    protected string $baseUrl = 'https://api.hostinger.com/v1';

    public function __construct()
    {
        $this->apiToken = config('services.hostinger.token', env('HOSTINGER_API_TOKEN'));
    }

    /**
     * Create a subdomain on Hostinger for a client staging environment.
     */
    public function createSubdomain(string $subdomain, string $parentDomain = 'm2b.co.id'): array
    {
        if (!$this->apiToken) {
            Log::info("[HOSTINGER_SIMULATED] createSubdomain: {$subdomain}.{$parentDomain}");
            return [
                'success'   => true,
                'subdomain' => "{$subdomain}.{$parentDomain}",
                'message'   => 'Subdomain staging environment created successfully (Simulated mode).',
            ];
        }

        try {
            $response = Http::withToken($this->apiToken)
                ->post("{$this->baseUrl}/hosting/websites/{$parentDomain}/subdomains", [
                    'subdomain' => $subdomain,
                ]);

            if ($response->successful()) {
                return [
                    'success'   => true,
                    'subdomain' => "{$subdomain}.{$parentDomain}",
                    'data'      => $response->json(),
                ];
            }

            return [
                'success' => false,
                'error'   => $response->json('message') ?? 'Failed to create subdomain on Hostinger.',
            ];
        } catch (\Throwable $e) {
            Log::error('[HOSTINGER_API_ERROR] ' . $e->getMessage());
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Clear LiteSpeed cache for a website on Hostinger.
     */
    public function clearCache(string $domain): bool
    {
        if (!$this->apiToken) {
            Log::info("[HOSTINGER_SIMULATED] clearCache for domain: {$domain}");
            return true;
        }

        try {
            $response = Http::withToken($this->apiToken)
                ->post("{$this->baseUrl}/hosting/websites/{$domain}/cache/clear");

            return $response->successful();
        } catch (\Throwable $e) {
            Log::error('[HOSTINGER_CACHE_CLEAR_ERROR] ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Sync and fetch all active domain registrations and hostings from Hostinger.
     */
    public function getDomainsList(): array
    {
        if (!$this->apiToken) {
            return [
                ['domain' => 'morabangun.com', 'expires_at' => now()->addMonths(6)->toDateString(), 'status' => 'ACTIVE'],
                ['domain' => 'm2b.co.id', 'expires_at' => now()->addMonths(8)->toDateString(), 'status' => 'ACTIVE'],
                ['domain' => 'dira.co.id', 'expires_at' => now()->addMonths(4)->toDateString(), 'status' => 'ACTIVE'],
                ['domain' => 'gma-world.id', 'expires_at' => now()->addMonths(9)->toDateString(), 'status' => 'ACTIVE'],
            ];
        }

        try {
            $response = Http::withToken($this->apiToken)->get("{$this->baseUrl}/domains");
            return $response->json('data', []);
        } catch (\Throwable $e) {
            Log::error('[HOSTINGER_DOMAINS_LIST_ERROR] ' . $e->getMessage());
            return [];
        }
    }
}
