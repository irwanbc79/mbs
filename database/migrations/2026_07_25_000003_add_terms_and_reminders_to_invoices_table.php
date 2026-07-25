<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreignId('customer_id')->nullable()->after('id')->constrained('customers')->nullOnDelete();
            $table->string('term_name')->nullable()->after('invoice_number');
            $table->unsignedTinyInteger('term_sequence')->default(1)->after('term_name');
            $table->timestamp('last_reminder_sent_at')->nullable()->after('notes');
        });
    }

    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropColumn(['customer_id', 'term_name', 'term_sequence', 'last_reminder_sent_at']);
        });
    }
};
