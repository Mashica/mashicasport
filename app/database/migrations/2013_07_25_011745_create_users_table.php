<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('name',50);
			$table->string('email',50)->unique();
			$table->string('email2',50);
			$table->integer('age')->nullable();
			$table->string('password');
			$table->boolean('activated')->default(0);
			$table->timestamps();
		}

		);
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