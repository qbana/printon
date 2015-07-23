<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileFormatPivotTable extends Migration {

	public function up()
	{
		Schema::create('file_format', function(Blueprint $table)
		{
			$table->integer('file_id')->unsigned()->index();
			$table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
			$table->integer('format_id')->unsigned()->index();
			$table->foreign('format_id')->references('id')->on('formats')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('file_format');
	}

}
