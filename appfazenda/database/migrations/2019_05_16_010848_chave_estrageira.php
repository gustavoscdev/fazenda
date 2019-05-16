<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrageira extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fa_animal', function (Blueprint $table) {
            $table->unsignedBigInteger('fazenda_id');
            $table->foreign('fazenda_id')
                    ->references('id')->on('adm_fazenda')
                    ->onDelete('no action');
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
