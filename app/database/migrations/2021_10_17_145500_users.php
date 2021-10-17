<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	public function up() {
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->enum('role',['ADMIN','USER','BANNED'])->default('USER');
			$table->rememberToken();
			$table->timestamps();
		});
	}
	
	public function down(){
		Schema::drop('users');
	}

}
