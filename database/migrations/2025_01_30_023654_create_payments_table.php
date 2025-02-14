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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('PaymentsID');
            $table->unsignedInteger('PartnerID')->nullable;
            $table->foreign ('PartnerID')
            ->references('PartnerID')
            ->on('partners');

            $table->integer('Amount');
            $table->date('Payment_Date');
            $table->date('Payment_Due_Date');
            $table->integer('Official_Receipt_Number');
            $table->date('Date_Receipt_of_OR');
            $table->date('OR_Date');
            $table->string('Sales_Period');
            $table->mediumText('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
