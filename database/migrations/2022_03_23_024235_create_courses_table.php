<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_category_id')->comment('coures of category');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('time_duration')->nullable();
            $table->integer('rating')->nullable();
            $table->boolean('is_trending')->default('0')->comment('1. Trending 0. Not in Trending');
            $table->boolean('is_active')->default('1')->comment('1. Active 0. Deactive');
            $table->boolean('is_popular')->default('0')->comment('1. Popular 0. Not Popular');
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
