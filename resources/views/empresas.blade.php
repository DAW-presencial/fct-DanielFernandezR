@extends('layouts.master')
@section('title', 'Empresas')
@section('content')

<h1 class="container pt-5">Datos de empresa para nuevo Acuerdo  </h1>
<h3 class="container"></h3>
<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <form class="form" method="post" action="{{ route('empresas.store') }}">
        @csrf
        <div class="row">
            <div class="form-group col-4">
                <label>Nombre</label>
                <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
                <!-- Error -->
                @if ($errors->has('nombre'))
                <div class="error">
                    {{ $errors->first('nombre') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>CIF</label>
                <input type="text" class="form-control {{ $errors->has('cif') ? 'error' : '' }}" name="cif" id="cif">
                @if ($errors->has('cif'))
                <div class="error">
                    {{ $errors->first('cif') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                <label>Teléfono 1</label>
                <input type="tel" class="form-control {{ $errors->has('telefono1') ? 'error' : '' }}" name="telefono1"
                    id="telefono1" maxlength="9">
                @if ($errors->has('telefono1'))
                <div class="error">
                    {{ $errors->first('telefono1') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Teléfono 2 (Opcional)</label>
                <input type="text" class="form-control {{ $errors->has('telefono2') ? 'error' : '' }}" name="telefono2"
                    id="telefono2">
                @if ($errors->has('telefono2'))
                <div class="error">
                    {{ $errors->first('telefono2') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Fax (Opcional)</label>
                <input type="text" class="form-control {{ $errors->has('fax') ? 'error' : '' }}" name="fax" id="fax">
                @if ($errors->has('fax'))
                <div class="error">
                    {{ $errors->first('fax') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-5">
                <label>Dirección</label>
                <input type="text" class="form-control {{ $errors->has('direccion') ? 'error' : '' }}" name="direccion" id="direccion">
                @if ($errors->has('direccion'))
                <div class="error">
                    {{ $errors->first('direccion') }}
                </div>
                @endif
            </div>
            <div class="form-group col-5">
                <label>Población</label>
                <input type="text" class="form-control {{ $errors->has('poblacion') ? 'error' : '' }}" name="poblacion"
                    id="poblacion">
                @if ($errors->has('poblacion'))
                <div class="error">
                    {{ $errors->first('poblacion') }}
                </div>
                @endif
            </div>
            <div class="form-group col-2">
                <label>Código Postal</label>
                <input type="text" class="form-control {{ $errors->has('cp') ? 'error' : '' }}" name="cp" id="cp">
                @if ($errors->has('cp'))
                <div class="error">
                    {{ $errors->first('cp') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-8">
                <label>Actividad Principal</label>
                <input type="text" class="form-control {{ $errors->has('actividad_principal') ? 'error' : '' }}" name="actividad_principal"
                    id="actividad_principal">
                @if ($errors->has('actividad_principal'))
                <div class="error">
                    {{ $errors->first('actividad_principal') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Sector productivo</label>
                <select class="form-control {{ $errors->has('sector_productivo') ? 'error' : '' }}" name="sector_productivo" id="sector_productivo">
                    <option value="primario">Primario</option>
                    <option value="secundario">Secundario</option>
                    <option value="terciario">Terciario</option>
                </select>
                @if ($errors->has('sector_productivo'))
                <div class="error">
                    {{ $errors->first('sector_productivo') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-2">
                <label>Titularidad</label>
                <div>
                    <input type="radio" class="{{ $errors->has('titularidad') ? 'error' : '' }}" name="titularidad" id="publica" value="publica" checked>
                    <label for="publica">Pública</label>
                </div>
                <div>
                    <input type="radio" class="{{ $errors->has('titularidad') ? 'error' : '' }}" name="titularidad" id="privada" value="privada">
                    <label for="privada">Privada</label>
                </div>
                @if ($errors->has('titularidad'))
                <div class="error">
                    {{ $errors->first('titularidad') }}
                </div>
                @endif
            </div>
            <div class="form-group col-5">
                <label>Nombre del representante</label>
                <input type="text" class="form-control {{ $errors->has('representante_nombre') ? 'error' : '' }}" name="representante_nombre"
                    id="representante_nombre">
                @if ($errors->has('representante_nombre'))
                <div class="error">
                    {{ $errors->first('representante_nombre') }}
                </div>
                @endif
            </div>
            <div class="form-group col-5">
                <label>NIF del representante</label>
                <input type="text" class="form-control {{ $errors->has('representante_nif') ? 'error' : '' }}" name="representante_nif"
                    id="representante_nif">
                @if ($errors->has('representante_nif'))
                <div class="error">
                    {{ $errors->first('representante_nif') }}
                </div>
                @endif
            </div>
        </div>
        <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block my-5">
    </form>
</div>

@endsection