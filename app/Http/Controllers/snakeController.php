<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class snakeController extends Controller
{
  public function index(){

    return view('snake');

  }
}
