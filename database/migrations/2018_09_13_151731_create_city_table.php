<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /**
         * suddenly i want to create a good structure but 
         * at a sprint 2 there's swapable implementation
         * i didnt know did what i do is correctly or not
         * i just think when u do 'swapable'
         * and not changing any code except the configuration eg: environment var
         * the structure must be same as the response
         * i can force the Raja Ongkir response with my custom 
         * structur response but it will take a more progress
         * on code logic so i use a table structur as the same one
         * like Raja Ongkir response :(
         */
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->unsignedInteger('province_id');
            $table->string('province');
            $table->string('type');
            $table->string('city_name');
            $table->string('postal_code');
            $table->timestamps();


            $table->foreign('province_id')
                ->references('id')->on('province')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
