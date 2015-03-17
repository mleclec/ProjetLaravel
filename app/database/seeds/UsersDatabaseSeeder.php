<?php


class UsersDatabaseSeeder extends Seeder {

    public function run()
	{
            DB::table('users')->delete();

            $password = Hash::make('rrichar1');
            User::create(array(
                            'firstname' =>'Rémy',
                            'username' => 'rrichar1',
                            'email' => 'r.remy4@gmail.com',
                            'password' => $password
                            ));
            $password = Hash::make('marine');
            User::create(array(
                            'firstname' =>'Marine',
                            'username' => 'marine',
                            'email' => 'marine@gmail.com',
                            'password' => $password
                            ));
	}
}