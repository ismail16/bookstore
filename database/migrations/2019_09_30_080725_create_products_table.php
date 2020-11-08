<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('slug');
            $table->text('description')->nullable();
            $table->string('category_id');
            $table->string('author_id');
            $table->string('publisher_id');
            $table->string('publish_date')->nullable();
            $table->string('page_no')->nullable();
            $table->string('language')->nullable();
            $table->string('edition')->nullable();
            $table->string('editor')->nullable();
            $table->string('translator')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('status');
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
        Schema::dropIfExists('products');
    }
}
