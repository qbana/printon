<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatsTable extends Migration {

	public function up()
	{
		Schema::create('formats', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('formats');
	}

}
