<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->cascadeOnDelete();
            $table->foreignId('customer_user_id')->nullable()->constrained('customer_users')->nullOnDelete();
            $table->decimal('claimed_amount', 15, 2);
            $table->timestamp('claimed_at')->useCurrent();
            $table->enum('state', ['submitted', 'under_review', 'verified', 'rejected'])->default('submitted');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('payment_evidences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_submission_id')->constrained('payment_submissions')->cascadeOnDelete();
            $table->string('path');
            $table->string('mime', 100);
            $table->string('sha256', 64)->unique();
            $table->timestamp('scanned_at')->nullable();
            $table->timestamps();
        });

        Schema::create('payment_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_submission_id')->constrained('payment_submissions')->cascadeOnDelete();
            $table->foreignId('admin_id')->constrained('users')->cascadeOnDelete();
            $table->enum('decision', ['verified', 'rejected']);
            $table->text('note')->nullable();
            $table->timestamp('decided_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_verifications');
        Schema::dropIfExists('payment_evidences');
        Schema::dropIfExists('payment_submissions');
    }
};
