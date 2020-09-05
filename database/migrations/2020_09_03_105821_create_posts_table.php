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
            $table->text('description');
            $table->decimal('price',8,2);
            $table->double('Length');
            $table->double('width');
            $table->string('location');
            $table->string('locations');
            $table->unsignedBigInteger('catigory_id');
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('catigory_id')->references('id')->on('catigories')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');
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
