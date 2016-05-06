<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_certificate', function (Blueprint $table) {
           $table->bigIncrements('id');  
			$table->bigInteger('user_id')->unsigned(); 
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name');  
            $table->string('business_name');  
            $table->string('language');
            $table->string('buiness_phone');
            $table->string('email_address');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
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
        Schema::drop('request_certificate');
    }
}
