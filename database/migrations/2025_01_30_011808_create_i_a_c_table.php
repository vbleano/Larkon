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
        Schema::create('IAC', function (Blueprint $table) {
            $table->id('IACId');
            $table->unsignedBigInteger('DiscID')->nullable;
            $table->foreign ('DiscID')
            ->references('DiscID')
            ->on('Disclosure');

            $table->string('Country of Citizenship');
            $table->string('Last Name');
            $table->string('First Name');
            $table->string('Middle Name');
            $table->string('Home Address');
            $table->string('Work Address');
            $table->string('Email Address');
            $table->string('Salutatory');
            $table->string('Main Affiliation');
            $table->string('Sub Affiliation');
            $table->string('Constituent University');
            $table->string('College/Unit');
            $table->string('Department/Institute');
            $table->integer('Contact Number');
            $table->string('Nature of Contribution/Role');
            $table->integer('Percentage of Contribution');
            $table->dateTime('Date of Birth');
            $table->enum('Civil Status', ['Single','Married','Divorced','Separated','Widowed']);
            $table->enum('Gender/Sex',['Male','Female','Prefer not to say']);
            $table->string('Nationality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('IAC');
    }
};
