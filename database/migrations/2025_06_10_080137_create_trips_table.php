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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('title')->required();
            $table->enum('region', ['east', 'west', 'north', 'central'])->required();
            $table->date('start_date')->required();
            $table->integer('number_of_people')->required()->min(1)->default(1);
            $table->integer('duration_days')->required()->min(1);
            $table->decimal('price_per_person', 10, 2)->required()->min(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
