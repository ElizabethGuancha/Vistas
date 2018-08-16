@extends('layouts.app')

@section('title', 'Miprimera pagina')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
    <h1>Hola Mundo</h1>
@endsection

@section('content')
    <p>This is my body content.</p>
    <h1>2018</h1>

    @for ($i = 0; $i < 10; $i++)
        El valor actual es {{ $i }} <br>
    @endfor 
@endsection

@if( $Age >= 20 )
    <h1>Eres mayor de edad</h1> 
@elseif ($Age >= 10 && $Age <= 15) 
    <h1>Aun no cumples la edad suficiente</h1> 
@else
    <h1>Eres menor de edad</h1> 
@endif