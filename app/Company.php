<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_email', 'company_password', 'company_name', 'company_category', 'company_description', 'company_comment', 'image'];


    public function employeers()
    {
        return $this->hasMany('App\Employee');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
