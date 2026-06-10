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
        Schema::table('footers', function (Blueprint $table) {
            // Google Maps embed URLs and social media links can exceed 255 chars
            $table->text('link_gmaps')->change();
            $table->text('link_instagram')->change();
            $table->text('link_youtube')->change();
            $table->text('link_linkedin')->change();
            $table->text('link_facebook')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footers', function (Blueprint $table) {
            $table->string('link_gmaps')->change();
            $table->string('link_instagram')->change();
            $table->string('link_youtube')->change();
            $table->string('link_linkedin')->change();
            $table->string('link_facebook')->change();
        });
    }
};
