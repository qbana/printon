<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('file_name');
            $table->string('slug')->unique()->index();
            $table->text('body');
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('files');
	}

}
