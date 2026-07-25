<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('leads')) {
            Schema::table('leads', function (Blueprint $table) {
                if (!Schema::hasColumn('leads', 'customer_id')) {
                    $table->foreignId('customer_id')->nullable()->after('id')->constrained('customers')->nullOnDelete();
                }
                if (!Schema::hasColumn('leads', 'solution_type')) {
                    $table->string('solution_type', 100)->nullable();
                }
                if (!Schema::hasColumn('leads', 'ai_draft_reply')) {
                    $table->text('ai_draft_reply')->nullable();
                }
                if (!Schema::hasColumn('leads', 'ai_replied_at')) {
                    $table->timestamp('ai_replied_at')->nullable();
                }
                if (!Schema::hasColumn('leads', 'estimated_budget')) {
                    $table->decimal('estimated_budget', 15, 2)->nullable();
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('leads')) {
            Schema::table('leads', function (Blueprint $table) {
                if (Schema::hasColumn('leads', 'customer_id')) {
                    $table->dropForeign(['customer_id']);
                    $table->dropColumn(['customer_id']);
                }
            });
        }
    }
};
