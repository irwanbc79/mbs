<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->foreignId('customer_id')->nullable()->after('id')->constrained('customers')->nullOnDelete();
            $table->string('solution_type', 100)->nullable()->after('service_interest');
            $table->text('ai_draft_reply')->nullable()->after('notes');
            $table->timestamp('ai_replied_at')->nullable()->after('ai_draft_reply');
            $table->decimal('estimated_budget', 15, 2)->nullable()->after('ai_replied_at');
        });
    }

    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropColumn(['customer_id', 'solution_type', 'ai_draft_reply', 'ai_replied_at', 'estimated_budget']);
        });
    }
};
