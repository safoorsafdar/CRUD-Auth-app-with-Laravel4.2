<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('product', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name", 100);
            $table->enum('active', array('yes', 'no'))->default("no");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //Schema::drop('product');
        Schema::dropIfExists("product");
    }

}
