<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlunoteste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AlunoTeste', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 11);
            $table->integer('idade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AlunoTeste', function (Blueprint $table) {
            //
        });
    }
}
