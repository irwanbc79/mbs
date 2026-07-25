<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('outbox_events')) {
            Schema::create('outbox_events', function (Blueprint $table) {
                $table->id();
                $table->string('aggregate_type', 100);
                $table->unsignedBigInteger('aggregate_id');
                $table->string('event', 150);
                $table->json('payload');
                $table->timestamp('available_at')->useCurrent();
                $table->timestamp('processed_at')->nullable();
                $table->unsignedTinyInteger('attempts')->default(0);
                $table->text('last_error')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('ai_runs')) {
            Schema::create('ai_runs', function (Blueprint $table) {
                $table->id();
                $table->string('feature', 100);
                $table->string('model', 100);
                $table->string('prompt_hash', 64);
                $table->unsignedInteger('input_tokens')->default(0);
                $table->unsignedInteger('output_tokens')->default(0);
                $table->decimal('cost', 10, 6)->default(0);
                $table->unsignedInteger('latency_ms')->default(0);
                $table->json('output')->nullable();
                $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
                $table->boolean('edited')->default(false);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('notification_logs')) {
            Schema::create('notification_logs', function (Blueprint $table) {
                $table->id();
                $table->enum('channel', ['wa', 'email', 'sms'])->default('wa');
                $table->string('to_redacted', 160);
                $table->string('template', 100)->nullable();
                $table->enum('status', ['queued', 'sent', 'failed', 'delivered'])->default('queued');
                $table->string('provider_ref')->nullable();
                $table->text('error')->nullable();
                $table->timestamp('sent_at')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('metrics_daily')) {
            Schema::create('metrics_daily', function (Blueprint $table) {
                $table->date('date')->primary();
                $table->decimal('mrr', 15, 2)->default(0);
                $table->decimal('arr', 15, 2)->default(0);
                $table->decimal('ar_outstanding', 15, 2)->default(0);
                $table->unsignedSmallInteger('dso')->default(0);
                $table->unsignedSmallInteger('wip_days')->default(0);
                $table->unsignedSmallInteger('open_tickets')->default(0);
                $table->decimal('lead_to_proposal_rate', 5, 2)->default(0);
                $table->decimal('proposal_win_rate', 5, 2)->default(0);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('project_costs')) {
            Schema::create('project_costs', function (Blueprint $table) {
                $table->id();
                $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();
                $table->enum('type', ['hosting', 'domain', 'api', 'subcontractor', 'license', 'other'])->default('other');
                $table->decimal('amount', 15, 2);
                $table->date('incurred_on');
                $table->text('note')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('service_assets')) {
            Schema::create('service_assets', function (Blueprint $table) {
                $table->id();
                $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
                $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();
                $table->enum('type', ['domain', 'hosting', 'app', 'repo', 'licence', 'ssl', 'email'])->default('app');
                $table->string('provider', 100)->default('Hostinger');
                $table->string('identifier');
                $table->enum('environment', ['prod', 'staging'])->default('prod');
                $table->foreignId('pic_contact_id')->nullable()->constrained('customer_contacts')->nullOnDelete();
                $table->enum('sla_tier', ['none', 'basic', 'standard', 'priority'])->default('none');
                $table->decimal('monthly_fee', 15, 2)->default(0);
                $table->date('renewal_date')->nullable();
                $table->boolean('auto_renew')->default(true);
                $table->string('credential_ref')->nullable();
                $table->enum('state', ['active', 'grace', 'suspended', 'terminated'])->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('wa_templates')) {
            Schema::create('wa_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('code')->unique();
                $table->text('content');
                $table->json('variables')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('wa_logs')) {
            Schema::create('wa_logs', function (Blueprint $table) {
                $table->id();
                $table->string('recipient_phone', 40);
                $table->text('message');
                $table->enum('status', ['sent', 'failed', 'pending'])->default('pending');
                $table->text('response_payload')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('wa_logs');
        Schema::dropIfExists('wa_templates');
        Schema::dropIfExists('service_assets');
        Schema::dropIfExists('project_costs');
        Schema::dropIfExists('metrics_daily');
        Schema::dropIfExists('notification_logs');
        Schema::dropIfExists('ai_runs');
        Schema::dropIfExists('outbox_events');
    }
};
