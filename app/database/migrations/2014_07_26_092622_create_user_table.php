<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table
				->increments('id');

			$table
				->string('user_name', 100)
				->nullable()
				->default(null);

			$table
				->string('password')
				->nullable()
				->default(null);

			$table
				->string('email')
				->nullable()
				->default(null);

			$table
				->bigInteger('mobile')
				->nullable()
				->unsigned()
				->default(null);

			$table
				->integer('group_id')
				->nullable()
				->unsigned()
				->default(null);

			$table
				->integer('region_id')
				->nullable()
				->unsigned()
				->default(null);

			$table
				->integer('organization_id')
				->nullable()
				->unsigned()
				->default(null);

			$table
				->string('remember_token', 100)
				->nullable()
				->default(null);

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
				->unique('user_name');

			$table
				->unique('email');

			$table
				->unique('mobile');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
