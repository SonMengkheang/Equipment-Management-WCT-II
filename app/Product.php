<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
          protected $table='products';
          protected $primaryKey = 'id';

          protected $fillable = ['pro_name','pro_code','pro_price','image','pro_info','stock','size_type',
                                 'color','department_id', 'admin_name' , 'admin_email'];

    public function user() {

        #return $this->belongsToMany('App\Role');
        return $this->hasMany(User::class);

    }
}
