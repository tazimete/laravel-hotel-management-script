<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestCertificateModel extends Model
{
    protected $table = 'request_certificate';
	protected $fillable = array('user_id', 'name', 'business_name', 'language', 'buiness_phone', 'email_address',
		'street_address', 'city', 'state', 'postal_code', 'country');
}
