<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{


    public function getRouteKeyName()
    {
        return 'uuid';
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function belongsToUser()
    {
        return $this->belongsToMany(User::class,'user_has_contact','user_id');
    }

}
