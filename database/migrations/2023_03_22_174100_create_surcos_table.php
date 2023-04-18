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
        Schema::create('surcos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("numero_surco");
            $table->string("humedad_min");
            $table->string("humedad_max");
            $table->string("temperatura_min");
            $table->string("temperatura_max");
            $table->string("id_sensor");
            $table->string("id_planta");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surcos');
    }
};
