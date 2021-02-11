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
              'nombre' => 'required|min:3|max:30',
              'cif' => 'required|min:9|max:9',
              'email' => 'required|email|email:rfc',
              'direccion' => 'required|min:5|max:40',
              'poblacion'=>'required|min:3|max:20',
              'cp' => 'required|digits:5',
              'telefono1' => 'required|digits:9',
              'telefono2' => 'nullable|digits:9',
              'fax' => 'nullable',
              'sector_productivo' => 'required|in:primario,secundario,terciario',
              'actividad_principal' => 'required|min:3|max:40',
              'titularidad' => 'required|in:publica,privada',
              'representante_nombre' => 'required|min:3|max:40',
              'representante_nif' => 'required|min:9|max:9'
           ]);

            //  Store data in database
            Empresas::create($request->all());
  
          // 
          return back()->with('success', 'Hemos registrado tu empresa correctamente!');
      }
}
