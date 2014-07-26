<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('region', function(Blueprint $table)
		{
			//
			$table
				->increments("id");

			$table
				->string("region_name")
				->nullable()
				->default(null);

			$table
				->integer("pid")
				->nullable()
				->unsigned()
				->default(null);
				
			$table
				->integer("sort")
				->nullable()
				->unsigned()
				->default(null);

			$table
				->dateTime("created_at")
				->nullable()
				->default(null);

			$table
				->dateTime("updated_at")
				->nullable()
				->default(null);

			$table
				->dateTime('deleted_at')
				->nullable()
				->default(null);

			$table
				->index('pid');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists("region");
	}

}