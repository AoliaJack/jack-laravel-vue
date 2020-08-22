<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    //
    // protected $fillable = [
    //     'name', 'price', 'price-after', 'user', 'status', 'features'
    // ];
    public function features()
    {
        return $this->hasMany('App\Features', 'pricings_id');
    }
}
