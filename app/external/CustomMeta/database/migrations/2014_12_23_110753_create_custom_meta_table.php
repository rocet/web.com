<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('custommeta', function(Blueprint $table)
		{
			//
			$table
				->increments('id');

			$table
				->string('type', 100)
				->nullable()
				->default(null);

			$table
				->string('field', 100)
				->nullable()
				->default(null);

			$table
				->text('value')
				->nullable()
				->default(null);

			$table
				->tinyInteger('lngval')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->string('defval', 100)
				->nullable()
				->default(null);

			$table
				->boolean('searchable');

			$table
				->boolean('showable');

			$table
				->integer('user_id')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->integer('item_id')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->integer('component_id')
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
		//
		Schema::drop('custommeta');
	}

}
