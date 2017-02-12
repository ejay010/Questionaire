<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrationStatus extends Model
{
    //
    protected $table = 'registration_status';

    protected $fillable = [
        'voter_id',
        'registrationStatus'
    ];

    public function voter(){
        return $this->belongsTo('App\Voter');
    }
}

