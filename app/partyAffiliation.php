<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partyAffiliation extends Model
{
    //
    protected $table = 'party_affiliations';

    protected $fillable = [
        'partyAffiliation',
        'voter_id'
    ];

    public function voter(){
        return $this->belongsTo('App\Voter');
    }
}
