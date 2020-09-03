<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function userRole()
    {
        return $this->hasOne('App\User')->using('App\UserRole');
    }
}
