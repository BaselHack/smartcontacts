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


    public function hasManyUser()
    {
        return $this->hasMany(User::class);
    }

}
