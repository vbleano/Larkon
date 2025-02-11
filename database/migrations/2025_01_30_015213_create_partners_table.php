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
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('PartnerID');
            $table->unsignedInteger('DiscID')->nullable;
            $table->foreign ('DiscID')
            ->references('DiscID')
            ->on('Disclosure');


            $table->string('Company Name');
            $table->string('Contact Person');
            $table->integer('Contact Number');
            $table->string('Contact Email');
            $table->string('Brand Name');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
