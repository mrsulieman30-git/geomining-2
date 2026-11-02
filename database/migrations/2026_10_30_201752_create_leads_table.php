<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('website')->nullable();
            $table->string('country')->nullable();
            $table->string('source')->nullable(); // e.g. web, referral
            $table->string('service_interest')->nullable();
            $table->decimal('estimated_value', 15, 2)->nullable();
            $table->string('currency')->default('USD');
            $table->foreignId('owner_id')->nullable()->constrained('users');
            $table->string('status')->default('new'); // new, contacted, qualified, discovery, proposal, negotiation, won, lost, dormant
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
