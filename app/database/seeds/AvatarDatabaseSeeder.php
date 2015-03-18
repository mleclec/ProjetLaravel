<?php


class AvatarDatabaseSeeder extends Seeder {

    public function run()
	{
            DB::table('avatars')->delete();

            Avatar::create(array(
                            'email' => 'r.remy4@gmail.com',
                            'photo' => 'pictures/img.jpg',
                            'user_id' => 1
                        ));
            
            Avatar::create(array(
                            'email' => 'r.remy@gmail.com',
                            'photo' => 'pictures/img2.jpg',
                            'user_id' => 1
                        ));
	}
}