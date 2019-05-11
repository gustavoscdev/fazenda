<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmUsuarioContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('adm_usuario_contato')) {
            Schema::create('adm_usuario_contato', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('usuario_id');
                $table->unsignedBigInteger('contato_tipo_id');
                $table->string('num_telefone',45);
                $table->string('des_contato',45);
        
                $table->dateTime('dt_alteracao');
                $table->unsignedBigInteger('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->unsignedBigInteger('usuario_id_criacao');
                $table->string('ind_situacao',1);

                $table->foreign('contato_tipo_id')
                    ->references('id')->on('adm_contato_tipo')
                    ->onDelete('no action');

                $table->foreign('usuario_id')
                    ->references('id')->on('adm_usuario')
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
