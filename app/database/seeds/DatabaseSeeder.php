<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Eloquent::unguard();

		$this->call( 'UserTableSeeder' );
		$this->call('RegionTableSeeder');
		$this->call( 'GroupTableSeeder' );
		$this->call( 'ResourceTableSeeder' );
        $this->call( 'ComponentTableSeeder' );
        $this->call( 'GroupUserTableSeeder' );
		// $this->call('GroupResourceTableSeeder');
	}

}
