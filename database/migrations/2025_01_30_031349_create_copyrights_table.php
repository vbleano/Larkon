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
        Schema::create('copyrights', function (Blueprint $table) {
            $table->increments('CopyrightID');
            $table->unsignedInteger('discID')->nullable;
            $table->foreign ('discID')
            ->references('discID')
            ->on('disclosures');

            $table->date('Date_of_Creation_of_Copyrightable_Material');
            $table->string('Place_of_Creation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copyrights');
    }
};
