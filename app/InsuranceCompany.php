<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class InsuranceCompany extends Authenticatable
{
    use Notifiable;

    protected $guard = 'insurancecompany';
    // protected $table = 'insurance_companies';
    // public $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'regID', 'password', 'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vehicles(){
        return $this->hasMany('App\Vehicle', 'insurance_id');
    }
}

