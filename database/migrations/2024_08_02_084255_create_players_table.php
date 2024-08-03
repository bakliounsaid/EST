<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('blood_category');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('position');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->boolean('has_insurance')->default(false);
            $table->string('phone')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('school_level')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
