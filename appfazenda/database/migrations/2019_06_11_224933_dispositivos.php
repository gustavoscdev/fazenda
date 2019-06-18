<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dispositivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('fa_dispositivo')) {
            Schema::create('fa_dispositivo', function (Blueprint $table) {
                $table->bigIncrements('id');                
                $table->string('des_dispositivo',255)->nullable();
                $table->string('num_latitude',255)->nullable();
                $table->string('num_longitude',255)->nullable();
                $table->unsignedBigInteger('fazenda_id');
           
                $table->dateTime('dt_alteracao');
                $table->unsignedBigInteger('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->unsignedBigInteger('usuario_id_criacao');
                $table->string('ind_situacao',1);                

     
                
                $table->foreign('fazenda_id')
                    ->references('id')->on('adm_fazenda')
                    ->onDelete('no action');
                    
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
