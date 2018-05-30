<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_salle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->integer('numero_salle')->nullable();
            $table->string('slug')->nullable();
            $table->longText('horraire')->nullabel();
            $table->integer('nb_people')->nullable();
            $table->longText('content');
            $table->integer('fk_file_id')->on('id')->reference('files')->nullable();
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
        Schema::dropIfExists('cms_salle');
    }
}
