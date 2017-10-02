<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('cid');
            $table->string('title', 200);
            $table->string('slug', 200)->unique();
            $table->unsignedInteger('created')->default(0);
            $table->unsignedInteger('modified')->default(0);
            $table->longText('text');
            $table->unsignedInteger('order')->default(0);
            $table->unsignedInteger('authorId')->default(0);
            $table->string('template', 32);
            $table->string('type', 16)->default('post');
            $table->string('status', 16)->default('publish');
            $table->string('password', 32);
            $table->unsignedInteger('commentsNum')->default(0);
            $table->char('allowComment', 1)->default(0);
            $table->char('allowPing', 1)->default(0);
            $table->char('allowFeed', 1)->default(0);
            $table->unsignedInteger('parent')->default(0);
            $table->index('created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
