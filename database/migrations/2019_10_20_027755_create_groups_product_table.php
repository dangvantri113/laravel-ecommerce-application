<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_lv1_id')->unsigned();
            $table->integer('category_lv2_id')->unsigned();
            $table->integer('shop_id')->unsigned();
            $table->string('name');
            $table->string('image_1');
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->text('description');
            $table->string('brand')->nullable();
            $table->integer('price');
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
        Schema::dropIfExists('groups_product');
    }
}
