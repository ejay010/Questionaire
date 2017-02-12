<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    //
    protected $table = 'education';

    protected $fillable = [
        'voter_id',
        'level',
        'schoolName',
    ];

    public function voter(){
        return $this->belongsTo('App\Voter');
    }
}
