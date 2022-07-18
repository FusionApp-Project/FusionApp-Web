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
        Schema::create('somtoday_roosters', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('leerling_id', false, true)->unsigned()->index();
            $table->string('categorie');
            $table->string('locatie');
            $table->string('beginDatumTijd');
            $table->string('eindDatumTijd');
            $table->integer('beginLesuur');
            $table->integer('eindLesuur');
            $table->string('titel');
            $table->string('omschrijving');
            $table->boolean('presentieRegistratieVerplicht');
            $table->boolean('presentieRegistratieVerwerkt');
            $table->string('afspraakStatus');
            $table->string('docent_afkorting');
            $table->string('vak_afkorting');
            $table->string('vak_naam');


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
        Schema::dropIfExists('somtoday_roosters');
    }
};
