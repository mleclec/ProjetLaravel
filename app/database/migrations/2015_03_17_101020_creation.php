<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('users', function(Blueprint $table) {
                $table->increments('id');
                $table->string('firstname', 128);
                $table->string('username', 128)->unique();
                $table->string('email', 128)->unique();
                $table->string('password', 64);
                $table->timestamps();
                $table->rememberToken();
            });
           
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
