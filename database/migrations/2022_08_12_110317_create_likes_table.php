<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            // $table->boolean('lkd')->default(0);
            // $table->timestamp('liked_at');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('restrict')
            //     ->onUpdate('restrict');

            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')
            //     ->references('id')
            //     ->on('posts')
            //     ->onDelete('restrict')
            //     ->onUpdate('restrict');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('user_id');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('is_dislike')->default(0);
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
        Schema::dropIfExists('likes');
    }
};
