@extends('layout')

@section('title', 'Home')

@section('content')
{{-- <h5>Bienvenid@ <?php echo $name ?> </h5> --}}
<!-- Usando el motor de vistas blade para mostrar la información y evitar inyección de scripts-->
<h5>Bienvenid@ {{ $name ?? "Invitado" }}</h5>
@endsection
