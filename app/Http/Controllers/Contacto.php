<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacto extends Controller
{
    // Mostrar página contacto
    public function showContacto(Request $request) {
        return view('contacto');
      }
}
