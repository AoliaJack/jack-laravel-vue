<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    //
    public function pricing()
    {
        return $this->belongsTo('App\Pricing');
    }
}
