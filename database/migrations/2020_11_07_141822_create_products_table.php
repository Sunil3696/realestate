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
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('category');
            $table->string('location');
            $table->string('area');
            $table->string('short_desc');
            $table->string('description');
            $table->string('email');
            $table->string('contact_no');
            $table->string('features')->nullable();
            $table->string('images')->nullable();
            $table->string('maps')->nullable();
            $table->string('video')->nullable();
            $table->enum('special_offer',['YES','NO'])->default('NO');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->unsignedBigInteger('added_by')->nullable();
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
