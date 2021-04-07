<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shape_types', function (Blueprint $table) {
            $table->id();

            $table->foreignId('shape_id');
            $table->foreign('shape_id')->references('id')
                ->on('shapes')->onDelete('cascade');

            $table->foreignId('type_id');
            $table->foreign('type_id')->references('id')
                ->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shape_types');
    }
}
