@extends('layout.plantilla')

@section('title', 'curso index')
    
@section('content')
    <h1>Cursos de servicios </h1>
    <ul>
        <li><a href="{{route('curso.cocina')}}">Cocina</a></li>
        <li><a href="{{route('curso.textiles')}}">Textiles</a></li>
        <li><a href="{{route('curso.servicios')}}">Servicios</a></li>
        

    </ul>
    <a href={{route('curso.create')}}>CREAR CURSOS</a>
    <a href={{route('curso.index')}}>LISTA DE TODOS LOS CURSOS</a>

    
    @foreach ($cursos as $curso)
        <ul>
            <li>
                <a href="{{route('curso.show', $curso)}}"">{{$curso->nombre
            }}</a>
                </li>
        </ul>

    @endforeach
  
        {{$cursos->links()}}

@endsection 