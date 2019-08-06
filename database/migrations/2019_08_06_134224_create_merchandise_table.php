<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchandiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandise', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("id");
            $table->unsignedBigInteger('designer_id')->nullable(false)->comment("designer ID");
            $table->bigInteger('designer')->nullable(false)->comment("designer");
            $table->tinyInteger('category')->nullable(false)->comment("0: Accessories 1: Bags 2: Clothing 3: Shoes");
            $table->string('name')->nullable(false)->comment('name of the merchandise');
            $table->integer('price')->nullable(false)->comment('price');
            $table->text('detail')->nullable(false)->comment('detail of the murchandise');
            $table->timestamps();
            $table->tinyInteger('deleted_at')->nullable(false)->comment('delete flag 0: not deleted 1: deleted');

            // setting foreign key
            $table->foreign('designer_id')->references('id')->on('designers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchandise');
    }
}
