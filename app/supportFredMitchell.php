<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supportFredMitchell extends Model
{
    //
    protected $table = 'support_fred_mitchell';
    protected $fillable = [
        'voter_id',
        'supportFredMitchell'
    ];

    protected $hidden = ['voter_id'];

    public function voter(){
        return $this->belongsTo('App\VoterModel');
    }
}
