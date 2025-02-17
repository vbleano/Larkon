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
        Schema::create('i_a_c_s', function (Blueprint $table) {
            $table->increments('IACId');
            $table->unsignedInteger('discID')->nullable;
            $table->foreign ('discID')
            ->references('discID')
            ->on('disclosures');

            $table->string('Country_of_Citizenship');
            $table->string('Last_Name');
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Home_Address');
            $table->string('Work_Address');
            $table->string('Email_Address');
            $table->string('Salutatory');
            $table->string('Main_Affiliation');
            $table->string('Sub_Affiliation');
            $table->string('Constituent_University');
            $table->string('College_Unit');
            $table->string('Department_Institute');
            $table->string('Contact_Number');
            $table->string('Nature_of_Contribution_Role');
            $table->integer('Percentage_of_Contribution');
            $table->dateTime('Date_of_Birth');
            $table->enum('Civil_Status', ['Single','Married','Divorced','Separated','Widowed']);
            $table->enum('Gender_Sex',['Male','Female','Non_binary','Prefer_not_to_say']);
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
