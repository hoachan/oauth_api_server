<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookOauth extends Model
{
    protected $fillable = [
        'facebook_id', 'user_id', 'email',
        'user_info', 'refresh_token',
        
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
