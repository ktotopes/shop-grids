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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained('categories');

            $table->string('name');
            $table->string('slug');

            $table->string('description');
            $table->text('details');

            $table->float('price');
            $table->tinyInteger('discount');

            $table->integer('quantity');


            $table->tinyInteger('mark');
            $table->boolean('is_new');



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
};
