<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guid');
            $table->string('title');
            $table->string('url_post');
            $table->dateTime('published_pub');
            $table->string('url_image');
            $table->text('content')->nullable();
            $table->string('social_origem')->nullable();
            $table->string('author')->nullable();
            $table->string('url_avatar_author')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
