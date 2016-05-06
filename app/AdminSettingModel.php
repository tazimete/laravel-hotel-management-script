<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSettingModel extends Model
{
   protected $table = 'admin_settings';
   protected $fillable = array('user_id', 'email_marketing_page', 'email_request_certificate','file_marketing');
}
