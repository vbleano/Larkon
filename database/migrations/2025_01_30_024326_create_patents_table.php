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
        Schema::create('patents', function (Blueprint $table) {
            $table->increments('PatentID');
            $table->unsignedInteger('DiscID')->nullable;
            $table->foreign ('DiscID')
            ->references('DiscID')
            ->on('Disclosure');

            $table->enum('Type of Invention',['Material/Compound','Process/Method',
            'Software/System','Device','Herbal Medicine/Drugs','Industrial Design']);
            $table->mediumText('Puropose of Invetion');
            $table->mediumText('Background of Invention');
            $table->mediumText('Potential Partners');
            $table->string('Key Novel Features');
            $table->string('Application/use of invention');
            $table->string('Stage of Development');
            $table->string('R&D Cost');
            $table->mediumText('Past Oral Disclosure');
            $table->mediumText('Past Written Disclosure');
            $table->mediumText('Future Disclosure Plans');

            $table->enum('TRL',['TRL1','TRL2','TRL3','TRL4','TRL5','TRL6','TRL7',
            'TRL8','TRL9',]);
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patents');
    }
};
