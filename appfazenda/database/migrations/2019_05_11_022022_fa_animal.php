<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('fa_animal')) {
            Schema::create('fa_animal', function (Blueprint $table) {
                $table->bigIncrements('id');               
                $table->unsignedBigInteger('animal_tipo_id'); 
                $table->string('nom_animal',45)->nullable();
                $table->decimal('num_peso',8,2)->nullable();
                $table->string('nom_raca',45)->nullable();
                $table->dateTime('dt_nascimento')->nullable();
                $table->string('img_animal',255)->nullable();
                $table->decimal('val_comprado',8,2)->nullable();
                $table->decimal('val_estimado',8,2)->nullable();
                $table->string('ind_vendido',1)->nullable();
                $table->decimal('val_vendido',8,2)->nullable();
                
  
                $table->dateTime('dt_alteracao');
                $table->unsignedBigInteger('usuario_id_alteracao');
                $table->dateTime('dt_criacao');
                $table->unsignedBigInteger('usuario_id_criacao');
                $table->string('ind_situacao',1);

                $table->foreign('animal_tipo_id')
                    ->references('id')->on('fa_animal_tipo')
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
