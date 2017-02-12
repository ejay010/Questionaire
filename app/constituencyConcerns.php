<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constituencyConcerns extends Model
{
    //
    protected $table = 'constitConcerns';

    protected $fillable = [
        'location_id',
        'constituencyConcerns',
    ];

    public function location(){
        return $this->belongsTo('App\location');
    }
}
