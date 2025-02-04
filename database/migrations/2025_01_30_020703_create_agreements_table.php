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
        Schema::create('agreements', function (Blueprint $table) {
            $table->increments('Agreement ID');
            $table->unsignedInteger('PartnerID')->nullable;
            $table->foreign ('PartnerID')
            ->references('PartnerID')
            ->on('partners');

            $table->date('Contract Effectivity Date');
            $table->date('Contract Expiry Date');
            $table->string('Agreement Title');
            $table->enum('Agreement Type',['MOA','Licensing Agreement','MOU',
            'MTA','RCA','Supplemental Licensing Agreement','Manufacturing Agreement',
            'Franchise License']);
            $table->enum('Agreement Status',['Draft','Inforced','Expired','Cancelled']);
            $table->enum('License Fee Status',['Paid','Unpaid','Waived']);
            $table->date('Contract Notary Date');
            $table->date('Royalty Deadline');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agreements');
    }
};
