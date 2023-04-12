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
        Schema::create('tiempo_reals', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date("fecha");
            $table->string("hora");
            $table->string("humedad_real");
            $table->string("temperatura_real");
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
        Schema::dropIfExists('tiempo_reals');
    }
};
