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
            $table->bigIncrements('id');
            $table->string('title',256);
            $table->string('subtitle',100);
            $table->string('slug',100);
            $table->text('body');
            $table->boolean('status');
            $table->bigInteger('posted_by')->unsigned();
            $table->string('image');
            $table->bigInteger('like')->unsigned();
            $table->bigInteger('dislike')->unsigned();
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
