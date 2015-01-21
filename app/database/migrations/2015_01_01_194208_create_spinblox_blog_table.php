<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpinbloxBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spinblox_blog', function(Blueprint $table)
		{
		    $table->increments('blog_id');
			$table->string('blog_name');
			$table->string('blog_description')->nullable();
			$table->string('blog_content');
			$table->string('blog_photo_path');
			$table->string('blog_author');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('spinblox_blog');
	}

}
