<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('media', function(Blueprint $table)
        {
            $table
                ->increments("id");

            $table
                ->integer('item_id')
                ->nullable()
                ->unsigned()
                ->default(0);

            $table
                ->integer('user_id')
                ->nullable()
                ->unsigned()
                ->default(0);

            $table
                ->integer('component_id')
                ->nullable()
                ->unsigned()
                ->default(0);

            $table
                ->string("title", 100)
                ->nullable()
                ->default(null);

            $table
                ->string("description", 100)
                ->nullable()
                ->default(null);

            $table
                ->string("path", 100)
                ->nullable()
                ->default(null);

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
                ->timestamp("created_at")
                ->nullable()
                ->default(null);

            $table
                ->dateTime("updated_at")
                ->nullable()
                ->default(null);

            $table
                ->dateTime("deleted_at")
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
		//
        Schema::drop('media');
	}

}
