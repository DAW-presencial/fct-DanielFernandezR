@extends('layouts.master')
@section('title', 'Contacto')
@section('content')

<h1 class="container pt-5">Blog para contactar con empresas</h1>
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
        <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block my-5">
    </form>
</div>

@endsection