<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->string('title')->comment('文章标题');
            $table->string('description')->nullable()->comment('简述');
            $table->text('body')->comment('文章内容');
            $table->string('image')->comment('主图');
            $table->text('banner_image')->comment('多图片')->nullable();
            $table->tinyInteger('status')->comment('状态1/0')->default(1);
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
        Schema::dropIfExists('posts');
    }
}
