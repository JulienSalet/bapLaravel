<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BasicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table){
            $table->increments('id');
            $table->string('file');
            $table->string('type');
            $table->integer('fk_user_id')->nullable();
            $table->timestamps();
        });
        
        Schema::create('cms_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('max_size') ->nullable();
            $table->text('horraire')->nullable();
            $table->integer('fk_file_id')->reference('id')->on('files')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->longText('description');
            $table->timestamps();
        });
    
        Schema::create('cms_pages', function(Blueprint $table){
            $table->increments('id');
            $table->longText('title');
            $table->string('url')->index();
            $table->unsignedInteger('fk_image_id')->nullable();
            $table->longText('content');
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->longText('og_title')->nullable();
            $table->longText('og_description')->nullable();
            $table->unsignedInteger('og_image')->nullable();
            $table->unsignedInteger('parent_page')->nullable();
            $table->timestamps();
            // Foreign keys
            $table->foreign('fk_image_id')->references('id')->on('files')->onUpdate('cascade')->onDelete('cascade');
        });
    
        Schema::create('cms_blocks_categories', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedInteger('fk_page_id');
            $table->timestamps();
            // Foreign key
            $table->foreign('fk_page_id')->references('id')->on('cms_pages');
        });
    
        Schema::create('cms_blocks', function (Blueprint $table){
            $table->increments('id');
            $table->enum('type', ['text', 'image']);
            $table->string('key')->index();
            $table->longText('value');
            $table->unsignedInteger('fk_page_id');
            $table->unsignedInteger('fk_category_id')->nullable();
            $table->timestamps();
            // Primary key
            $table->foreign('fk_page_id')->references('id')->on('cms_pages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_category_id')->references('id')->on('cms_blocks_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_blocks_categories');
        Schema::dropIfExists('cms_blocks');
        Schema::dropIfExists('cms_reservation');
        Schema::dropIfExists('cms_pages');
        Schema::dropIfExists('files');
    }
}
