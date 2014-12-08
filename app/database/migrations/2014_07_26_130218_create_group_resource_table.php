<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_resource', function(Blueprint $table)
		{
			$table
                ->increments('id');

            $table
                ->integer('group_id')
                ->nullable()
                ->default(null);

            $table
                ->integer('resource_id')
                ->nullable()
                ->default(null);

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
            	->index('group_id');
            	
            $table
            	->index('resource_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_resource', function(Blueprint $table)
		{
			Schema::drop('group_resource');
		});
	}

}
