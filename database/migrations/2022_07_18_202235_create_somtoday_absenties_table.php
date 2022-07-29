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
        Schema::create('somtoday_absenties', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('somtoday_profile_id', false, true)->unsigned()->index();
            $table->string('absentieSoort');
            $table->string('afkorting');
            $table->string('omschrijving');
            $table->boolean('geoorloofd');
            $table->string('datumInvoer');
            $table->string('beginDatumTijd');
            $table->string('eindDatumTijd');
            $table->integer('beginLesuur');
            $table->integer('eindLesuur');
            $table->boolean('afgehandeld');
            $table->string('eigenaarMedewerker_afkorting');
            $table->string('eigenaarMedewerker_nummer');

            $table->timestamps();

            $table->foreign('leerling_id')->references('id')->on('somtoday_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('somtoday_absenties');
    }
};
