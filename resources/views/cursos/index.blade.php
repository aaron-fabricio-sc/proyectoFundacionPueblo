@extends('layout.plantilla')

@section('title', 'curso index')
    
@section('content')
    
    

        <h1 class="text-3xl  font-bold">Lista de todos los Cursos </h1>
    <ul>
        <li><a href="{{route('curso.cocina')}}">Cocina</a></li>
        <li><a href="{{route('curso.textiles')}}">Textiles</a></li>
        <li><a href="{{route('curso.servicios')}}">Servicios</a></li>
        

    </ul>
    <a href={{route('curso.create')}}>CREAR CURSO</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
 @foreach ($cursos as $curso)
      
                <a href="{{route('curso.show', $curso)}}">{{$curso->nombre
            }}</a>
            <br>
            {{route('curso.show', $curso)}}
                
    @endforeach
    </div>
 
  
       {{$cursos->links()}}
  
  

@endsection