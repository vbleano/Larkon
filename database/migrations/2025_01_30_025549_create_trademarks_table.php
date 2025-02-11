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
        Schema::create('trademarks', function (Blueprint $table) {
            $table->increments('TrademarkID');
            $table->unsignedInteger('DiscID')->nullable;
            $table->foreign ('DiscID')
            ->references('DiscID')
            ->on('Disclosure');

            $table->enum('Type of Mark',['Word Mark','Figurative Mark','Figurative with Word Mark',
            '3D Mark','Stamped or Marked container of good']);
            $table->mediumText('Description of the Mark');
            $table->mediumText('Disclaimer');
            $table->string('Translation/Transliteration');
            $table->boolean('Collective Mark');
            $table->string('Word to be Trademarked');
            $table->boolean('Mark has any color');
            $table->string('colors of the mark');
            $table->mediumText('List of specific goods/services');
            $table->mediumText('Future/Potential Applications');
            $table->enum('NICE Classification',[
                'Class 1','Class 2','Class 3','Class 4','Class 5','Class 6','Class 7','Class 8','Class 9','Class 10',
                'Class 11','Class 12','Class 13','Class 14','Class 15','Class 16','Class 17','Class 18','Class 19','Class 20',
                'Class 21','Class 22','Class 23','Class 24','Class 25','Class 26','Class 27','Class 28','Class 29','Class 30',
                'Class 31','Class 32','Class 33','Class 34','Class 35','Class 36','Class 37','Class 38','Class 39','Class 40',
                'Class 41','Class 42','Class 43','Class 44','Class 45']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trademarks');
    }
};
