<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function showIndex(Request $request) {
        return view('index');
      }
}
