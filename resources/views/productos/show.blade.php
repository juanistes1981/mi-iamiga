@extends('layouts.plantilla2')

@section('title','Show')

@section('content')

@if ($productoMasBarato)
    <h1>Producto más barato</h1>
    <p>
        Nombre: {{ $productoMasBarato->name }}
        Precio: {{ $productoMasBarato->costo }}
        Supermercado: {{ $productoMasBarato->super }}
    </p>
@else
    <h1>No se encontró el producto</h1>
    <p>{{ $mensaje }}</p>
@endif


@endsection