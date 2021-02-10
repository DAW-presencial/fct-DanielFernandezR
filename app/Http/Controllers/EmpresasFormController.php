<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasFormController extends Controller
{
     // Create Contact Form
     public function createForm(Request $request) {
        return view('empresas');
      }
  
      // Store Contact Form data
      public function EmpresasForm(Request $request) {
  
          // Form validation
          $this->validate($request, [
              'nombre' => 'required',
              'cif' => 'required',
              'email' => 'required',
              'direccion' => 'required',
              'poblacion'=>'required',
              'cp' => 'required',
              'telefono1' => 'required',
              'telefono2' => 'nullable',
              'fax' => 'nullable',
              'sector_productivo' => 'required',
              'actividad_principal' => 'required',
              'titularidad' => 'required',
              'representante_nombre' => 'required',
              'representante_nif' => 'required'
           ]);

            //  Store data in database
            Empresas::create($request->all());
  
          // 
          return back()->with('success', 'Hemos registrado tu empresa correctamente!');
      }
}
