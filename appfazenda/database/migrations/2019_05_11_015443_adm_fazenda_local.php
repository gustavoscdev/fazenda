<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmFazendaLocal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('adm_fazenda_local')) {
            Schema::create('adm_fazenda_local', function (Blueprint $table) {
                $table->unsignedBigInteger('fazenda_id');                
                $table->string('pais',45);
                $table->string('estado',45);
                $table->string('logradouro',45);
                $table->string('latitude',45);
                $table->string('longitude',45);
                $table->dateTime('dt_alteracao');
                $table->unsignedBigInteger('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->unsignedBigInteger('usuario_id_criacao');
                $table->string('ind_situacao',1);

                $table->primary('fazenda_id');
                
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
