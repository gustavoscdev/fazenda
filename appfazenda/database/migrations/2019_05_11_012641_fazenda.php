<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fazenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('adm_fazenda')) {
            Schema::create('adm_fazenda', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nom_fazenda',255);
                $table->string('cod_fazenda',50)->unique();;
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

                $table->index(['cod_fazenda']);
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
