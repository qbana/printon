<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration {

	public function up()
	{
		Schema::create('parameters', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->text('body');
            $table->integer('owner_id')->unsigned()->index();
			$table->foreign('owner_id')->references('id')->on('users');
			$table->integer('created_id')->unsigned();
			$table->foreign('created_id')->references('id')->on('users');
			$table->integer('updated_id')->unsigned();
			$table->foreign('updated_id')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::drop('parameters');
	}

}
