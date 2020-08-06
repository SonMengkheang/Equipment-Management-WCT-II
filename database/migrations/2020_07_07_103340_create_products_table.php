<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('pro_name');
        $table->string('pro_code')->unique();
        $table->decimal('pro_price',10,2);
        $table->text('pro_info');
        $table->string('image')->nullable();
        $table->integer('stock');
        $table->string('size_type');
        $table->string('color');
        $table->integer('class_id');

        $table->bigInteger('user_id')->unsigned();
        $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');

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
