<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model             
{
	protected $table = 'property_options';      
	protected $fillable = array('property_name', 'user_id' ,'property_logo', 'property_twitter_url', 'property_tripadvisor_url',
		'legal_property_name','street_address', 'suffix', 'city', 'city_lat', 'city_lng', 'postal_code', 
		'state_region', 'country', 'phone', 'fax');
    
}
   