<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->foreignId('lead_id')->nullable()->constrained('leads');
            $table->string('name');
            $table->text('scope')->nullable();
            $table->decimal('estimated_value', 15, 2)->nullable();
            $table->string('currency')->default('USD');
            $table->integer('confidence')->default(0); // 0-100 percentage
            $table->date('expected_close')->nullable();
            $table->foreignId('owner_id')->nullable()->constrained('users');
            $table->string('status')->default('open'); // open, won, lost
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
