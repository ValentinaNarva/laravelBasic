@extends('layouts.plantilla')

@section('content')
    
    <h1>forma de pago</h1>

<form action="{{ route('formaDePago.store') }}" method="POST">

    @csrf
  
<label>
    nombre
    <br>
    <input type="text" name="nombre">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection