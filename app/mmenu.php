<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mmenu extends Model
{

  public function meals()
  {
    return $this->HasMany('App\meal', 'menu_id');
  }
}
