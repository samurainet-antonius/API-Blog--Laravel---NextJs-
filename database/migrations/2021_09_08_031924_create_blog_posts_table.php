<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->primary('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('users_id');
            $table->string('news_title',200);
            $table->unique('news_title');
            $table->string('news_url',225);
            $table->longText('news_content');
            $table->string('news_image',200);
            $table->tinyInteger('active')->default('1');
            $table->tinyInteger('views')->default('0');
            $table->tinyInteger('share')->default('0');
            $table->uuid('uuid');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
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
