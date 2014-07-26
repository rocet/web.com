<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgnazeUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orgnaze_user', function(Blueprint $table)
		{
			$table
				->increments('id');

			$table
                ->integer("orgnaze_id")
                ->nullable()
                ->default(null);

            $table
                ->integer("user_id")
                ->nullable()
                ->default(null);

            $table
                ->timestamp("created_at")
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
            	->index('orgnaze_id');
            	
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
		Schema::drop('orgnaze_user');
	}

}
