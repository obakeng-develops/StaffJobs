<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
