<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmenitiesModel extends Model
{
    protected $table = 'amenities_review';      
	protected $fillable = array('user_id', 'property_id' ,'muslim_prayer_mat', 'qibla_direction', 'quran_in_room',
		'praying_direction_from_hotel_staff','local_prayer_time_table', 'halal_restaurant_list', 'mosque_or_suraus_list', 'alcoholic_beverages', 'halal_food');
}
