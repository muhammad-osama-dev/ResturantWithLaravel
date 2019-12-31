<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
  public function meal(){
    return $this->belongsTo('App\meal');
  }
  public function table(){
    return $this->belongsTo('App\table');
  }

}
