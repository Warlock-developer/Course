<?php 

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'first_name' => 'Dawin',
			'last_name' => 'Valenzuela',
			'email' => 'dawin.valenzuela@gmail.com',
			'password' => \Hash::make('secret'),
			'type' => 'admin',
			'full_name' => 'Dawin Valenzuela'
		));

		\DB::table('user_profiles')->insert(array(
			'user_id' => 1,
			'birthdate' => '1964-02-20'
		));
	}
	
}