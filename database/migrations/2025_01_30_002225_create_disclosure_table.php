<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Disclosure', function (Blueprint $table) {
            $table->id('DiscID');
            $table->unsignedBigInteger('user_id')->nullable;
            $table->foreign ('user_id')
            ->references('id')
            ->on('users');

            $table->string('Disclosure Title');
            $table->mediumText('Short Description');
            $table->enum('Type of IP',['Patent','Industrial Design', 'Utility Model','Copyright','Trademark']);
            $table->json('Funding Sources');  // Multivalued
            $table->integer('Year Submitted');
            $table->integer('Date Submitted');
            $table->string('Month Submitted');
            $table->enum('Status',['Disclosure Submitted','Case Assigned',
            'Technology Assessment','Prior Art Search','For Additional Disclosure',
            'For IP Committee Approval','Disapproved by IP Committee','Completion of Requirements',
            'Filed','Published','For Substantive Examination','For Response to office action',
            'Responded to Office Action','For Conversion/Refiling','Converted','For Payment of Reg Fees',
            'Registered','Issucance of Certificate','For Payment of Annuity','For Payment of DAU',
            'For Renewal','Rejected','Withdrawn or Abandoned','Expired','For PCT Application',
            'For National Phase Entry Application']);
            $table->boolean('Plan to Commercialize');
            $table->string('University facilities and equipments used');

            $table->timestamps();
            //Multivalued Files:

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Disclosure');
    }
};
