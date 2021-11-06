<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class snakeController extends Controller
{
  public function index(){

    return view('snake');

  }
  public function weather(){

    return view('weather');

  }
  public function calculator(){

    return view('calcu');

  }
}
