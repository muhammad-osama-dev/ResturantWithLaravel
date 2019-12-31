<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\meal;
use App\mmenu;

class HomeController extends Controller
{
  public function show()
  {
    $meal = meal::all();
    // $meal0 = meal::firstOrFail();
    $menu = mmenu::with('meals')->get();




    return view('/welcome', compact('menu')); //->with($meal0);
  }
}
