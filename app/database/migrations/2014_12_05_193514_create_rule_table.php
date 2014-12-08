<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('rule', function(Blueprint $table)
        {
            $table
                ->increments('id');

            $table
                ->text('rule')
                ->nullable()
                ->default(null);

            $table
                ->integer('group_id')
                ->nullable()
                ->unsigned()
                ->default(0);

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
                ->unique('group_id');
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
        Schema::drop('rule');
	}

}
