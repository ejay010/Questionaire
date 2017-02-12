<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class union extends Model
{
    //
    protected $table = 'unions';

    protected $fillable = [
        'voter_id',
        'unionName'
    ];

    public function voter(){
        $this->belongsTo('App\VoterModel');
    }
}
