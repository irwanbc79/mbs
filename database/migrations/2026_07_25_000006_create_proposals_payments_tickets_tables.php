<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('proposals')) {
            Schema::create('proposals', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->string('title');
                $table->string('client_name')->nullable();
                $table->string('client_email')->nullable();
                $table->string('client_phone')->nullable();
                $table->string('client_company')->nullable();
                $table->text('description')->nullable();
                $table->decimal('amount', 15, 2)->default(0);
                $table->enum('status', ['draft', 'sent', 'accepted', 'declined', 'expired'])->default('draft');
                $table->date('valid_until')->nullable();
                $table->text('notes')->nullable();
                $table->unsignedBigInteger('created_by')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('payments')) {
            Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('invoice_id')->nullable();
                $table->decimal('amount', 15, 2)->default(0);
                $table->date('payment_date')->nullable();
                $table->enum('method', ['bank_transfer', 'cash', 'credit_card', 'qris', 'other'])->default('bank_transfer');
                $table->string('reference_number')->nullable();
                $table->text('notes')->nullable();
                $table->unsignedBigInteger('recorded_by')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('tickets')) {
            Schema::create('tickets', function (Blueprint $table) {
                $table->id();
                $table->string('ticket_number', 50)->nullable();
                $table->unsignedBigInteger('project_id')->nullable();
                $table->string('client_name')->nullable();
                $table->string('client_email')->nullable();
                $table->string('client_phone')->nullable();
                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->enum('priority', ['low', 'medium', 'high', 'urgent'])->default('medium');
                $table->enum('status', ['open', 'in_progress', 'pending_client', 'resolved', 'closed'])->default('open');
                $table->string('category', 100)->nullable();
                $table->unsignedBigInteger('assigned_to')->nullable();
                $table->timestamp('resolved_at')->nullable();
                $table->text('notes')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('proposals');
    }
};
