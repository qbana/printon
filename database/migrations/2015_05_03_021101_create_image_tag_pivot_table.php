<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTagPivotTable extends Migration {

	public function up()
	{
		Schema::create('image_tag', function(Blueprint $table)
		{
			$table->integer('image_id')->unsigned()->index();
			$table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
			$table->integer('tag_id')->unsigned()->index();
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('image_tag');
	}

}
