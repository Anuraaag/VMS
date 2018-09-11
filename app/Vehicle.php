<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';

    public $primaryKey = 'id';

    public $timestamps = true;


    public function insurancecompany()
    {
        return $this->belongsTo('App\InsuranceCompany', 'insurance_id');
    }

}