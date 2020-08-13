<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes  extends Model
{
          protected $table='classes';
          protected $primaryKey = 'id';

          protected $fillable = ['className','classCode', 'room', 'section'];

    public function user() {
        #return $this->belongsToMany('App\Role');
        return $this->hasMany(User::class);

    }
}
