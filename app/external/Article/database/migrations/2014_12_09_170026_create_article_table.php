<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article', function(Blueprint $table)
		{
			//
            $table
                ->increments('id');

            $table
                ->string('title', 100)
                ->nullable()
                ->default(null);

            $table
                ->text('content')
                ->nullable()
                ->default(null);

            $table
                ->string('keyword', 100)
                ->nullable()
                ->default(null);

            $table
                ->string('description')
                ->nullable()
                ->default(null);

            $table
                ->string('image', 100)
                ->nullable()
                ->default(null);

            $table
                ->integer('user_id')
                ->nullable()
                ->unsigned()
                ->default(0);

            $table
                ->integer('category_id')
                ->nullable()
                ->unsigned()
                ->default(0);

            $table
                ->tinyInteger('state')
                ->nullable()
                ->unsigned()
                ->default(false);

            $table
                ->integer('sort')
                ->nullable()
                ->unsigned()
                ->default(0);

            $table
                ->timestamp('created_at')
                ->nullable()
                ->default(null);

            $table
                ->dateTime('updated_at')
                ->nullable()
                ->default(null);

            $table
                ->dateTime('deleted_at')
                ->nullable()
                ->default(null);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article');
	}

}
