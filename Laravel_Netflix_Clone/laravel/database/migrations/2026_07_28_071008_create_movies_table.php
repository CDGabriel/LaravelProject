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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            // TMDb
            $table->unsignedBigInteger('tmdb_id')->unique();
            // Basic information
            $table->string('title');
            $table->text('overview')->nullable();
            // Dates
            $table->date('release_date')->nullable();
            // Ratings
            $table->decimal('popularity', 10, 3)->nullable();
            // Images
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            // External links
            $table->float('vote_average')->nullable();
            $table->string('trailer_key')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
