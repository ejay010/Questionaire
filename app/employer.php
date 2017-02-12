<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    //
    protected $table = 'employer';

    protected $fillable = [
        'voter_id',
        'employerName',
        'unionName'
    ];

    public function voter(){
        return $this->belongsTo('App\VoterModel');
    }
}
