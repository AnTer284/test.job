<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = ['first_name', 'last_name', 'salary','company_id'];


    public function position()
    {
        return $this->hasOne('App\Position');
    }

}
