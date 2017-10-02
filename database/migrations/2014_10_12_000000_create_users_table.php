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
            $table->increments('uid');
            $table->string('name', 32)->unique();
            $table->string('password', 64);
            $table->string('mail')->unique();
            $table->string('url', 200);
            $table->string('screenName', 32);
            $table->unsignedInteger('created')->default(0);
            $table->unsignedInteger('activated')->default(0);
            $table->unsignedInteger('logged')->default(0);
            $table->string('group', 16)->default('visitor');
            $table->string('authCode', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
