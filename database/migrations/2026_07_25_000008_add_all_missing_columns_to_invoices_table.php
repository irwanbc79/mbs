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
                if (!Schema::hasColumn('invoices', 'invoice_number')) {
                    $table->string('invoice_number', 100)->nullable()->after('id');
                }
                if (!Schema::hasColumn('invoices', 'status')) {
                    $table->enum('status', ['draft', 'sent', 'partial', 'paid', 'overdue', 'cancelled'])->default('draft')->after('invoice_number');
                }
                if (!Schema::hasColumn('invoices', 'client_name')) {
                    $table->string('client_name')->nullable()->after('status');
                }
                if (!Schema::hasColumn('invoices', 'client_company')) {
                    $table->string('client_company')->nullable()->after('client_name');
                }
                if (!Schema::hasColumn('invoices', 'client_email')) {
                    $table->string('client_email')->nullable()->after('client_company');
                }
                if (!Schema::hasColumn('invoices', 'client_phone')) {
                    $table->string('client_phone')->nullable()->after('client_email');
                }
                if (!Schema::hasColumn('invoices', 'issued_date')) {
                    $table->date('issued_date')->nullable()->after('client_phone');
                }
                if (!Schema::hasColumn('invoices', 'subtotal')) {
                    $table->decimal('subtotal', 15, 2)->default(0)->after('issued_date');
                }
                if (!Schema::hasColumn('invoices', 'tax_percent')) {
                    $table->decimal('tax_percent', 5, 2)->default(0)->after('subtotal');
                }
                if (!Schema::hasColumn('invoices', 'tax_amount')) {
                    $table->decimal('tax_amount', 15, 2)->default(0)->after('tax_percent');
                }
                if (!Schema::hasColumn('invoices', 'total')) {
                    $table->decimal('total', 15, 2)->default(0)->after('tax_amount');
                }
                if (!Schema::hasColumn('invoices', 'paid_amount')) {
                    $table->decimal('paid_amount', 15, 2)->default(0)->after('total');
                }
                if (!Schema::hasColumn('invoices', 'created_by')) {
                    $table->unsignedBigInteger('created_by')->nullable()->after('paid_amount');
                }
                if (!Schema::hasColumn('invoices', 'proposal_id')) {
                    $table->unsignedBigInteger('proposal_id')->nullable()->after('created_by');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('invoices')) {
            Schema::table('invoices', function (Blueprint $table) {
                $columns = [
                    'invoice_number', 'status', 'client_name', 'client_company',
                    'client_email', 'client_phone', 'issued_date', 'subtotal',
                    'tax_percent', 'tax_amount', 'total', 'paid_amount',
                    'created_by', 'proposal_id'
                ];
                $toDrop = array_filter($columns, fn($col) => Schema::hasColumn('invoices', $col));
                if (!empty($toDrop)) {
                    $table->dropColumn($toDrop);
                }
            });
        }
    }
};
