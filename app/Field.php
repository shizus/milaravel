<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Field extends Model{

    protected $table = 'fields';

    protected $fillable = ['id', 'name', 'type', /*'sport',*/ 'venue_id'];

    public function venue() {
        $this->belongsTo('App\Venue');
        //$this->hasMany('App\Hour');
    }

} 