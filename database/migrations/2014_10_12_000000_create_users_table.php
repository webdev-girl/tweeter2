<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->default('user.jpg');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('following', function (Blueprint $table) {
     $table->integer('user_id')->unsigned()->index();
     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

     $table->integer('follower_id')->unsigned()->index();
     $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('following');
        Schema::dropIfExists('users');
    }
}
