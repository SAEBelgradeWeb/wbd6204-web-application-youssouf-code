<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');

            $table->foreignId('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')
                ->on('vehicles')->onDelete('cascade');

            $table->foreignId('make_id')->nullable();
            $table->foreign('make_id')->references('id')
                ->on('makes')->onDelete('cascade');

            $table->foreignId('type_id')->nullable();
            $table->foreign('type_id')->references('id')
                ->on('types')->onDelete('cascade');

            $table->foreignId('shape_id')->nullable();
            $table->foreign('shape_id')->references('id')
                ->on('shapes')->onDelete('cascade');

            $table->foreignId('fuel_id')->nullable();
            $table->foreign('fuel_id')->references('id')
                ->on('fuels')->onDelete('cascade');

            $table->foreignId('region_id')->nullable();
            $table->foreign('region_id')->references('id')
                ->on('regions')->onDelete('cascade');

            $table->foreignId('transmission_id')->nullable();
            $table->foreign('transmission_id')->references('id')
                ->on('transmissions')->onDelete('cascade');

            $table->foreignId('feature_id')->nullable();
            $table->foreign('feature_id')->references('id')
                ->on('features')->onDelete('cascade');

            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('power')->nullable();
            $table->integer('price')->nullable();
            $table->integer('year')->nullable();
            $table->bigInteger('mileage')->nullable();

            $table->enum('drive_type', ['AWD', 'FWD','RWD', '4WD'])->default('FWD')->nullable();
            $table->enum('condition', ['new', 'used','like new'])->default('used')->nullable();
            $table->enum('door', ['2', '3','5'])->default('5')->nullable();
            //$table->integer('door');

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
