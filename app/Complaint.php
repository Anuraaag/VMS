<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaints';

    public $primaryKey = 'id';

    public $timestamps = true;

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'owner_id');
    // }

    public function trafficpolice()
    {
        return $this->belongsTo('App\TrafficPolice', 'traffic_id');
    }
}