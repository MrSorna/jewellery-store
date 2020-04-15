<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_translations', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('language')->default('en');
            $table->string('title')->nullable();
            $table->string('summary')->nullable();
            $table->text('content')->nullable();
            $table->json('faqs')->nullable();
            $table->string('author')->nullable();
            $table->json('meta_tags')->nullable();
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
                ->references('id')
                ->on('blog_posts')
                ->onDelete('cascade');
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
        Schema::dropIfExists('blog_post_translations');
    }
}
