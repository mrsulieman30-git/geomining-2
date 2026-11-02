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
            $table->string('customer_code')->unique();
            $table->string('legal_name');
            $table->string('type')->default('company'); // individual, company
            $table->string('country')->nullable();
            $table->string('language')->default('en');
            $table->string('currency')->default('USD');
            $table->string('status')->default('active');
            $table->foreignId('owner_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
