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
        Schema::create('disclosures', function (Blueprint $table) {
            $table->increments('discID')->primary;
            $table->unsignedInteger('user_id')->nullable;
            $table->foreign ('user_id')
            ->references('id')
            ->on('users');

            $table->string('Disclosure_Title');
            $table->mediumText('Short_Description');
            $table->enum('Type_of_IP',['Patent','Industrial Design', 'Utility Model','Copyright','Trademark']);
            $table->string('Funding_Sources');  // Multivalued
            $table->integer('Year_Submitted');
            $table->integer('Date_Submitted');
            $table->string('Month_Submitted');
            $table->enum('Status',['Disclosure Submitted','Case Assigned',
            'Technology Assessment','Prior Art Search','For Additional Disclosure',
            'For IP Committee Approval','Disapproved by IP Committee','Completion of Requirements',
            'Filed','Published','For Substantive Examination','For Response to office action',
            'Responded to Office Action','For Conversion/Refiling','Converted','For Payment of Reg Fees',
            'Registered','Issucance of Certificate','For Payment of Annuity','For Payment of DAU',
            'For Renewal','Rejected','Withdrawn or Abandoned','Expired','For PCT Application',
            'For National Phase Entry Application']);
            $table->boolean('Plan_To_Commercialize');
            $table->string('University_Facilities');

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
