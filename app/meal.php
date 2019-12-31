<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    public function menu() {
      return $this->belongsTo('App\menu');
    }
}
