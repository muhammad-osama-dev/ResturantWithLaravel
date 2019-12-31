<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public function meals(){
      return $this->HasMany('App\meal');
    }
}
