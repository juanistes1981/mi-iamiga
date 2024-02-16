@extends('layouts.plantilla2')

@section('title','Create')

@section('content')

<h1>Pagina que crea un nuevo producto</h1>

<form action="{{route('productos.store')}}" method="post">

    @csrf
    
    <label>
        Localidad:
        <input type="text" name="localidad">
    </label>
    <br>
    <label>
        Nombre del producto:
        <input type="text" name="producto">
    </label>
    <br>
    <label>
        marca:
        <input type="text" name="marca">
    </label>
    <br>
    <label>
        costo:
        <input type="float" name="costo">
    </label>
    <br>
    <label>
        Supermercado:
        <input type="text" name="super">
    </label>
    <br>
    <button type="submit">cargar datos</button>
</form>

@endsection