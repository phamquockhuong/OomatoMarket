<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentblogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentblog', function (Blueprint $table) {
            $table->increments('com_blog_id');
            $table->string('com_blog_content');
            $table->integer('id_blog')->unsginged();
            $table->integer('id')->unsginged();
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
        Schema::dropIfExists('commentblog');
    }
}
