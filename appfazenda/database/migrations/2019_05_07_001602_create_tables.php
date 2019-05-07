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
                $table->dateTime('dt_alteracao');
                $table->bigInt('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->bigInt('usuario_id_criacao');
                $table->string('ind_situacao',1);
                
                $table->foreign('usuario_id_alteracao')
                      ->references('id')->on('adm_usuario')
                      ->onDelete('no action');

                $table->foreign('usuario_id_criacao')
                      ->references('id')->on('adm_usuario')
                      ->onDelete('no action');

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
