<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatAdminSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_settings', function (Blueprint $table) {
             $table->bigIncrements('id');  
			$table->bigInteger('user_id')->unsigned(); 
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('email_marketing_page');  
			$table->string('email_request_certificate');  
			$table->string('file_marketing');    
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
        Schema::drop('admin_settings');
    }
}
