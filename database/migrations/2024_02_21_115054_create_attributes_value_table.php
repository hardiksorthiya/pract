<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes_value', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('attributes_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->bigInteger('products_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('attributes_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes_value');
    }
}
