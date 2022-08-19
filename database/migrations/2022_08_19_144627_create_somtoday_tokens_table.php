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
        Schema::create('somtoday_tokens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('profile_id', false, true)->unsigned()->index();

            $table->string('access_token');
            $table->string('refresh_token');
            $table->string('somtoday_api_url');
            $table->string('somtoday_oop_url');
            $table->string('somtoday_tenant');
            $table->string('id_token');
            $table->unsignedBigInteger('expires_in');

            $table->foreign('profile_id')->references('id')->on('somtoday_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('somtoday_tokens');
    }
};
