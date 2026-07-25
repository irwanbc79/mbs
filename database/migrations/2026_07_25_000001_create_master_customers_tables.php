<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('legal_name')->nullable();
            $table->string('npwp', 30)->nullable();
            $table->enum('type', ['company', 'individual', 'government'])->default('company');
            $table->string('industry', 100)->nullable();
            $table->enum('state', ['prospect', 'active', 'inactive', 'churned'])->default('prospect');
            $table->timestamps();
        });

        Schema::create('customer_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->string('name');
            $table->string('wa', 40)->nullable();
            $table->string('email', 160)->nullable();
            $table->string('role', 100)->nullable();
            $table->boolean('is_primary')->default(false);
            $table->timestamps();
        });

        Schema::create('customer_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('contact_id')->nullable()->constrained('customer_contacts')->nullOnDelete();
            $table->string('email', 160)->unique();
            $table->string('password')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->enum('state', ['active', 'invited', 'suspended'])->default('active');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('customer_user_roles', function (Blueprint $table) {
            $table->foreignId('customer_user_id')->constrained('customer_users')->cascadeOnDelete();
            $table->enum('role', ['owner', 'finance', 'technical', 'viewer'])->default('viewer');
            $table->primary(['customer_user_id', 'role']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_user_roles');
        Schema::dropIfExists('customer_users');
        Schema::dropIfExists('customer_contacts');
        Schema::dropIfExists('customers');
    }
};
