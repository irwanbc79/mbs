<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('invoices')) {
            Schema::table('invoices', function (Blueprint $table) {
                if (!Schema::hasColumn('invoices', 'customer_id')) {
                    $table->foreignId('customer_id')->nullable()->after('id')->constrained('customers')->nullOnDelete();
                }
                if (!Schema::hasColumn('invoices', 'term_name')) {
                    $table->string('term_name')->nullable();
                }
                if (!Schema::hasColumn('invoices', 'term_sequence')) {
                    $table->unsignedTinyInteger('term_sequence')->default(1);
                }
                if (!Schema::hasColumn('invoices', 'last_reminder_sent_at')) {
                    $table->timestamp('last_reminder_sent_at')->nullable();
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('invoices')) {
            Schema::table('invoices', function (Blueprint $table) {
                if (Schema::hasColumn('invoices', 'customer_id')) {
                    $table->dropForeign(['customer_id']);
                    $table->dropColumn(['customer_id']);
                }
            });
        }
    }
};
