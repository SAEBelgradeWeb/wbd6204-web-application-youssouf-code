<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_post', function (Blueprint $table) {
            $table->id();

            $table->foreignId('post_id');
            $table->foreign('post_id')->references('id')
                ->on('posts')->onDelete('cascade');

            $table->foreignId('feature_id');
            $table->foreign('feature_id')->references('id')
                ->on('features')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_post');
    }
}
