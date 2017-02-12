<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class governmentConcerns extends Model
{
    //
    protected $table = 'govConcerns';

    protected $fillable = [
        'location_id',
        'governmentConcerns'
    ];

    public function location(){
        return $this->belongsTo('App\location');
    }
}
