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
            ->on('disclosures');

            $table->enum('Type_of_Invention',['Material/Compound','Process/Method',
            'Software/System','Device','Herbal Medicine/Drugs','Industrial Design']);
            $table->mediumText('Purpose_of_Invention');
            $table->mediumText('Background_of_Invention');
            $table->mediumText('Potential_Partners');
            $table->string('Key_Novel_Features');
            $table->string('Application_use_of_Invention');
            $table->string('Stage_of_Development');
            $table->string('R_and_D_Cost');
            $table->mediumText('Past_Oral_Disclosure')->nullable();
            $table->date('Past_Oral_Disclosure_Date')->nullable();
            $table->mediumText('Past_Written_Disclosure')->nullable();
            $table->date('Past_Written_Disclosure_Date')->nullable();
            $table->mediumText('Future_Disclosure_Plans');
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
