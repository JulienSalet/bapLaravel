<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle');
            $table->text('excerpt');
            $table->longText('content');
            $table->integer('fk_file_id')->on('id')->reference('files')->nullable();
            $table->timestamps();
        });
    
        Schema::create('cms_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
        });
        
        Schema::create('category_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_post_id')->on('id')->reference('cms_post')->nullable();
            $table->integer('fk_category_id')->on('id')->reference('cms_category')->nullable();
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
        Schema::dropIfExists('cms_post');
        Schema::dropIfExists('cms_category');
    }
}
