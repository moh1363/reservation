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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('load_number');
            $table->bigInteger('car_id')->unsigned();
            $table->string('product_type');
            $table->string('issue_date');
            $table->string('tracking_number');
            $table->string('row')->default(000000);
            $table->string('status')->default(0);
            $table->foreign('car_id')->references('id')->on('car_numbers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('properties');
    }
};
