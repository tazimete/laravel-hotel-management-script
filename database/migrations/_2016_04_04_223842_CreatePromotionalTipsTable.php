<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionalTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotional_tips', function (Blueprint $table) {
            $table->bigIncrements('id');  
			$table->bigInteger('user_id')->unsigned(); 
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('title');  
            $table->string('description');  
            $table->string('image_url');
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
        Schema::drop('promotional_tips');
    }
}
