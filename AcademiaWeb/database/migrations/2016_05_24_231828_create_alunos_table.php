<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade');
            $table->float('peso_incial');
            $table->float('peso_final');
            $table->integer('id_professor')->unsigned();
            $table->timestamps();
            $table->foreign('id_professor')->references('id')->on('professors');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alunos');
	}

}
