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
        Schema::create('site_details', function (Blueprint $table) {
            $table->id();
            $table->string('siteName', 255);                                  
            $table->string('siteLocation', 255);                                  
            $table->string('matrialDetails', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_details');
    }
};
