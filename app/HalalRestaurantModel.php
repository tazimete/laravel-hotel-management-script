<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HalalRestaurantModel extends Model
{
    protected $table = "restaurant"; 
	protected $fillable = array('name','address','cuisine','picture');
}
