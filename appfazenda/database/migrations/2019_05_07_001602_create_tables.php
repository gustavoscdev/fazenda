<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('adm_usuario')) {
            Schema::create('adm_usuario', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nom_usuario',255);
                $table->dateTime('dt_criacao');
                $table->integer('usuario_id_criacao');
                $table->dateTime('dt_alteracao');
                $table->integer('usuario_id_alteracao');
                $table->string('ind_situacao',1);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
