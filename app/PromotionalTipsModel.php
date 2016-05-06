<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionalTipsModel extends Model
{
    //
	protected $table = "promotional_tips";
	protected $fillable = array('user_id', 'title', 'description', 'image_url'); 
}
