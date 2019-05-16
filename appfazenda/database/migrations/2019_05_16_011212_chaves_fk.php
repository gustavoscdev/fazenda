<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChavesFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fa_animal_tipo', function (Blueprint $table) {
            $table->unsignedBigInteger('fazenda_id');
            $table->foreign('fazenda_id')
                    ->references('id')->on('adm_fazenda')
                    ->onDelete('no action')
                    ->after('des_tipo');
        });
        Schema::table('fa_animal_album', function (Blueprint $table) {
            $table->unsignedBigInteger('fazenda_id');
            $table->foreign('fazenda_id')
                    ->references('id')->on('adm_fazenda')
                    ->onDelete('no action')
                    ->after('ind_principal');
        });
        Schema::table('fa_animal_local', function (Blueprint $table) {
            $table->unsignedBigInteger('fazenda_id');
            $table->foreign('fazenda_id')
                    ->references('id')->on('adm_fazenda')
                    ->onDelete('no action')
                    ->after('num_longitude');
        });
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
