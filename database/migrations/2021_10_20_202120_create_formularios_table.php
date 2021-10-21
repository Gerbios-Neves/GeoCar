<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_proprietario');
            $table->string('telefone_proprietario');
            $table->string('telefone_fixo');
            $table->string('email_')->unique();
            $table->string('cidade');
            $table->string('tipo');
            $table->string('matricula')->unique();
            $table->string('zona');
            $table->string('nome_motorista');
            $table->string('telefone_motorista');
            $table->string('inicio');
            $table->string('fim');
            $table->string('tipo_gps');
            $table->string('imei_gps')->unique();
            $table->string('sim_gps');
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
        Schema::dropIfExists('formularios');
    }
}
