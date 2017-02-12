<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    //
    protected $table = 'location';

    protected $fillable = [
        'address1',
        'address2',
        'city',
        'island',
        'pollingDivision',
        //'aptNumber',
        'primaryColor',
        'secondaryColor',
        'otherDetails',
        'classification',
        'persons',
        'voters'
    ];

    public function voters(){
        return $this->hasMany('App\Voter');
    }

    public function repConcerns(){
        return $this->hasMany('App\repConcerns');
    }

    public function govConcerns(){
        return $this->hasMany('App\governmentConcerns');
    }

    public function constitConcerns(){
        return $this->hasMany('App\constituencyConcerns');
    }
}
