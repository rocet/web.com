<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_user', function(Blueprint $table)
		{
			$table
                ->increments('id');

            $table
                ->integer('group_id')
                ->nullable()
                ->default(null);

            $table
                ->integer('user_id')
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
            	->index('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_user', function(Blueprint $table)
		{
			Schema::drop('group_user');
		});
	}

}
