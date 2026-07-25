<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('leads')) {
            Schema::create('leads', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('company')->nullable();
                $table->string('service_interest')->default('website');
                $table->enum('status', ['new', 'contacted', 'qualified', 'converted', 'lost'])->default('new');
                $table->enum('source', ['website', 'referral', 'social_media', 'whatsapp', 'direct', 'other'])->default('website');
                $table->text('notes')->nullable();
                $table->unsignedBigInteger('assigned_to')->nullable();
                $table->unsignedBigInteger('customer_id')->nullable();
                $table->string('solution_type', 100)->nullable();
                $table->text('ai_draft_reply')->nullable();
                $table->timestamp('ai_replied_at')->nullable();
                $table->decimal('estimated_budget', 15, 2)->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
