<?php


class AvatarDatabaseSeeder extends Seeder {

    public function run()
	{
            DB::table('avatars')->delete();

            Avatar::create(array(
                            'email' => 'r.remy4@gmail.com',
                            'email_MD5' => md5('r.remy4@gmail.com'),
                            'link' => 'pictures/img.jpg',
                            'user_id' => 1
                        ));
            
            Avatar::create(array(
                            'email' => 'r.remy@gmail.com',
                            'email_MD5' => md5('r.remy@gmail.com'),
                            'link' => 'pictures/img2.jpg',
                            'user_id' => 1
                        ));
            
            Avatar::create(array(
                            'email' => 'mar@gmail.com',
                            'email_MD5' => md5('mar@gmail.com'),
                            'link' => 'pictures/img2.jpg',
                            'user_id' => 2
                        ));
            
	}
}