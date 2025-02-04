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
            $table->date('Payment Date');
            $table->date('Payment Due Date');
            $table->integer('Official Receipt Number');
            $table->date('Date Receipt of OR');
            $table->date('OR Date');
            $table->string('Sales Period');
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
