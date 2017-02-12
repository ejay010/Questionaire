<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastElection extends Model
{
    //
    protected $table = 'last_election';

    protected $fillable = [
        'voter_id',
        'supported',
        'status'
    ];

    public function voter(){
        return $this->belongsTo('App\VoterModel');
    }
}
