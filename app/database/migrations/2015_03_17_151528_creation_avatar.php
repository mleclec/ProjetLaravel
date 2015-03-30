<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationAvatar extends Migration {

        /**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avatars', function(Blueprint $table){
			$table->increments('id');
			$table->string('email',128)->unique();
                        $table->string('email_MD5',128)->unique();
                        $table->string('photo',128);
                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')->references('id')->on('users');
                        $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('avatars');
	}

}
