<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmContatoTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('adm_contato_tipo')) {
            Schema::create('adm_contato_tipo', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('cod_tipo',50)->unique();
                $table->string('nom_contato_tipo',45);
                $table->dateTime('dt_alteracao');
                $table->unsignedBigInteger('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->unsignedBigInteger('usuario_id_criacao');
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
        //
    }
}
