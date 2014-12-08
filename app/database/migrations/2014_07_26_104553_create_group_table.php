<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group', function(Blueprint $table)
		{
			$table
				->increments('id');

			$table
				->integer('pid')
				->nullable()
				->unsigned()
				->default(null);

			$table
				->integer('depth')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->integer('lft')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->integer('rgt')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->string('group_name', 100)
				->nullable()
				->default(null);

			$table
				->integer('user_id')
				->nullable()
				->unsigned()
				->default(0);
				
			$table
				->tinyInteger('state')
				->nullable()
				->unsigned()
				->default(false);

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

			$table
				->integer('sort')
				->nullable()
				->unsigned()
				->default(0);
				
			$table
				->unique('group_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group', function(Blueprint $table)
		{
			Schema::drop('group');
		});
	}

}
