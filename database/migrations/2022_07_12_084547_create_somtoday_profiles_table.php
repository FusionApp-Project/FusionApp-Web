<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('somtoday_profiles', function (Blueprint $table) {
            $table->integer('id')->unsigned()->index();
            $table->bigInteger('user_id', false, true)->unsigned()->index();
            $table->string('uuid');
            $table->string('leerlingnummer');
            $table->string('roepnaam');
            $table->string('achternaam');
            $table->string('email');
            $table->string('mobielNummer');
            $table->string('geboortedatum');
            $table->string('geslacht');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('somtoday_profiles');
    }
};
