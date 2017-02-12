<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children extends Model
{
    //
    protected $table = 'children';

    protected $fillable = [
        'voter_id',
        'male',
        'female'
    ];

    public function voter(){
        return $this->belongsTo('App\VoterModel');
    }
}
