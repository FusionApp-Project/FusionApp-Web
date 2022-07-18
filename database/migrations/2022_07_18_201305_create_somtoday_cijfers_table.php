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
        Schema::create('somtoday_cijfers', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('leerling_id', false, true)->unsigned()->index();
            $table->string('resultaat');
            $table->string('geldendResultaat');
            $table->string('datumInvoer');
            $table->integer('leerjaar');
            $table->integer('periode');
            $table->integer('weging');
            $table->integer('examenWeging');
            $table->boolean('isExamendossierResultaat');
            $table->boolean('isVoortgangsdossierResultaat');
            $table->string('omschrijving');
            $table->integer('vak_id');
            $table->string('vak_afkorting');
            $table->string('vak_naam');
            $table->boolean('has_herkansing');
            $table->string('herkansing_datumInvoer');
            $table->string('herkansing_resultaat');

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
        Schema::dropIfExists('somtoday_cijfers');
    }
};
