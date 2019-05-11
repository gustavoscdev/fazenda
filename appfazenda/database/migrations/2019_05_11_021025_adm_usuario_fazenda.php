<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmUsuarioFazenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('adm_usuario_fazenda')) {
            Schema::create('adm_usuario_fazenda', function (Blueprint $table) {
                $table->unsignedBigInteger('usuario_id');
                $table->unsignedBigInteger('fazenda_id');
                $table->string('ind_responsavel',1)->default('N');
  
                $table->dateTime('dt_alteracao');
                $table->unsignedBigInteger('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->unsignedBigInteger('usuario_id_criacao');
                $table->string('ind_situacao',1);
                
                $table->primary(['usuario_id', 'fazenda_id']);              

                $table->foreign('usuario_id')
                    ->references('id')->on('adm_usuario')
                    ->onDelete('no action');
                
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
