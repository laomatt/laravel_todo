<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class specific_control extends Controller
{
    //
   public function __construct(){
      $this->middleware('moddle');
   }
}
