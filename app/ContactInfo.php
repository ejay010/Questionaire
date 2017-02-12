<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    //
    protected $table = 'contact_info';

    protected $fillable = [
        'voter_id',
        'email',
        'homePhone',
        'cellPhone',
        'workPhone',
        'whatsappNumber',
        'facebook',
        'twitter',
        'instagram'
    ];

    public function voter(){
        return $this->belongsTo('App\VoterModel');
    }
}
