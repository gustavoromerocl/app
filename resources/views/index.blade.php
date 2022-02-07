@extends('layout')

@section('title', 'Home')

@section('content')
<h1>Votos</h1> 
<!-- Usando el motor de vistas blade para mostrar la información y evitar inyección de scripts-->
{{-- <h5>Bienvenid@ {{ $name ?? "Invitado" }}</h5> --}}
<ul>
  <h5>Total de votos emitidos: {{ count($votes) }}</h5>
  @foreach($votes as $votesItem)
    <li>{{ $votesItem['name'] }}</li>
  @endforeach
</ul>
@endsection
