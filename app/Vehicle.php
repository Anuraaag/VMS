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

    public function servicecenter()
    {
        return $this->belongsTo('App\ServiceCenter', 'service_id');
    }

    public function rto()
    {
        return $this->belongsTo('App\RTO', 'rto_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Auth', 'owner_id');
    }

}