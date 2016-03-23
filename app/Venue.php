<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Venue extends Model{

    protected $table = 'venues';

    protected $fillable = ['name', 'address', 'latitude', 'longitude', 'phone'];

    public function fields() {
        $this->hasMany('App\Field');
    }

} 