<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repConcerns extends Model
{
    //
    protected $table = 'repConcerns';

    protected $fillable = [
        'location_id',
        'repConcerns'
    ];

    public function location(){
        return $this->belongsTo('App\location');
    }
}
