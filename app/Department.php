<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function applicant()
    {
        return $this->hasMany('App\Applicants');
    }

    public function job()
    {
        return $this->hasMany('App\Jobs');
    }
}
