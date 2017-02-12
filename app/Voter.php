<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    //
    protected $table = 'voters';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'dob',
        'maritalStatus',
    ];

    public function location(){
        return $this->belongsTo('App\location');
    }

    public function children(){
        return $this->hasOne('App\children');
    }

    public function education(){
        return $this->hasMany('App\education');
    }

    public function employer(){
        return $this->hasOne('App\employer');
    }

    public function union(){
        return $this->hasOne('App\union');
    }

    public function contactInfo(){
        return $this->hasOne('App\ContactInfo');
    }

    public function registrationStatus(){
        return $this->hasOne('App\registrationStatus');
    }

    public function partyAffiliation(){
        return $this->hasOne('App\partyAffiliation');
    }

    public function lastElection(){
        return $this->hasOne('App\LastElection');
    }

    public function supportFredMitchell(){
        return $this->hasOne('App\supportFredMitchell');
    }
}
