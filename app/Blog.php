<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    public function blogger(){
    	return $this->belongsTo('App\Blogger');
    }
}
