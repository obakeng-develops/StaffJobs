<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /*
    ** Get the user that posted the Job
    */
    public function userPosted()
    {
        return $this->belongsTo('App\User');
    }

    /*
    ** Get the department job belongs to
    */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
