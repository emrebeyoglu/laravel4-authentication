<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		$user = new User();
		$user->username = 'admin';
		$user->password = Hash::make('123');
		$user->role = 'ADMIN';

		$user->save();
	}

}
