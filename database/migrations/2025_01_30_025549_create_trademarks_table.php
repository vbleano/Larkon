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
            $table->unsignedInteger('discID')->nullable;
            $table->foreign ('discID')
            ->references('discID')
            ->on('disclosures')
            ->onDelete('cascade');

            $table->enum('Type_of_Mark',['Word_Mark','Figurative_Mark','Figurative_with_Word_Mark',
            '3D_Mark','Stamped_or_Marked_container_of_good']);
            $table->mediumText('Description_of_the_Mark');
            $table->mediumText('Disclaimer');
            $table->string('Translation_Transliteration');
            $table->boolean('Collective_Mark');
            $table->string('Word_to_be_Trademarked');
            $table->boolean('Mark_has_any_color');
            $table->string('Colors_of_the_Mark');
            $table->string('Purpose_of_the_Mark');
            $table->mediumText('List_of_specific_goods_services');
            $table->mediumText('Future_Potential_Applications');
            $table->enum('NICE_Classification',[
                                'Class_1,Class_2,Class_3,Class_4,Class_5,Class_6,Class_7,Class_8,Class_9,Class_10,Class_11,
                                Class_12,Class_13,Class_14,Class_15,Class_16,Class_17,Class_18,Class_19,Class_20,Class_21,Class_22,Class_23,Class_24,Class_25,
                                Class_26,Class_27,Class_28,Class_29,Class_30,Class_31,Class_32,Class_33,Class_34,Class_35,Class_36,Class_37,Class_38,Class_39,
                                Class_40,Class_41,Class_42,Class_43,Class_44,Class_45']);
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
