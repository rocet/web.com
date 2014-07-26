<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgnazeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orgnaze', function(Blueprint $table)
		{
			$table
				->increments("id");

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
				->string("orgnaze_name", 100)
				->nullable()
				->default(null);

			$table
				->integer("region_id")
				->nullable()
				->unsigned()
				->default(0);

			$table
				->integer("user_id")
				->nullable()
				->unsigned()
				->default(0);

			$table
				->tinyInteger('state')
				->nullable()
				->unsigned()
				->default(false);

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

			$table
				->integer('sort')
				->nullable()
				->unsigned()
				->default(0);

			$table
				->unique('orgnaze_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orgnaze', function(Blueprint $table)
		{
			Schema::drop('orgnaze');
		});
	}

}
