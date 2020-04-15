<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shown')->default(0);
            $table->boolean('active')->default(true);
            $table->boolean('home')->default(false);
            $table->unsignedInteger('creator_id')->nullable();
            $table->unsignedInteger('updater_id')->nullable();
            $table->unsignedBigInteger('preview_id')->nullable();
            $table->unsignedBigInteger('banner_id')->nullable();
            $table->foreign('preview_id')->references('id')->on('files');
            $table->foreign('banner_id')->references('id')->on('files');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('updater_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
