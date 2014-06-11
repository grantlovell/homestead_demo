<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'email' => 'user@example.com',
			'password' => Hash::make('secret')
		]);
	}

}
