@extends('layouts.plantilla2')

@section('title','index')

@section('content')

<h1>Productos ordenados Alfabeticamente</h1>
<ul>
    @foreach ($producto as $produc)

    <li>{{$produc->producto}}</li>
        
    @endforeach
</ul>

@endsection