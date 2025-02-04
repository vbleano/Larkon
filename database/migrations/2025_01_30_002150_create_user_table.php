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
        Schema::create('user', function (Blueprint $table) {
            $table->id();  
            $table->string('Last Name');
            $table->string('First Name');
            $table->string('Middle Name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('College Unit');
            $table->string('Institute / Department');
            $table->string('Affiliation');
            $table->enum('User Role',['System Administrator',
            'Director','IP Manager','TTBDO Personnel','Inventor','UP Official']);
            $table->rememberToken();
            $table->string('google_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
