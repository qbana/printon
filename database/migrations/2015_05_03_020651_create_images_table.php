<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('slug')->index();
            $table->string('img_name')->unique();
            $table->text('body');
            $table->string('unique_id');
		});
	}

	public function down()
	{
		Schema::drop('images');
	}

}
