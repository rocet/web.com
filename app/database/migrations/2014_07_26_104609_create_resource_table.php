<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resource', function(Blueprint $table)
		{
			$table
				->increments("id");
				
			$table
				->string("resource_name", 100)
				->nullable()
				->default(null);

			$table
				->string("target")
				->nullable()
				->default(null);

			$table
				->string("pattern")
				->nullable()
				->default(null);

			$table
				->string("validate")
				->nullable()
				->default(null); 

			$table
				->boolean("secure")
				->nullable()
				->default(null); 

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
				->unique('resource_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resource', function(Blueprint $table)
		{
			Schema::drop('resource');
		});
	}

}
