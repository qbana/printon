<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionSubsTable extends Migration {

	public function up()
	{
		Schema::create('option_subs', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('option_subs');
	}

}
