<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('property_options', function (Blueprint $table) {
           $table->bigIncrements('id');  
			$table->bigInteger('user_id')->unsigned(); 
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('property_name');  
            $table->string('property_logo');  
            $table->string('property_twitter_url');  
            $table->string('property_tripadvisor_url');     
            $table->string('legal_property_name');         
            $table->string('street_address');  
            $table->string('suffix');     
            $table->string('city');   
            $table->string('city_lat');  
            $table->string('city_lng');  
            $table->string('postal_code');               
            $table->string('state_region');  
            $table->string('country');  
            $table->string('phone');  
            $table->string('fax');  
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
        Schema::drop('property_options');
    }
}
