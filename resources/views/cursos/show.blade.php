@extends("layout.plantilla")

@section('title','Curso '. $curso->nombre)


@section('content')
    <h1>Bienvenido al curso de: {{$curso->nombre}}</h1>
    <a href="{{route('curso.index')}}">Volver a los cursos</a>

<br>
<a href="{{route('curso.edit',$curso)}}">Editar Curso</a>
    <p><b>Categoría: </b> {{$curso->categoria}}</p>
    <p><b>Descripción:</b> {{$curso->descripcion}}</p>
    

    <form action="{{route('curso.delete', $curso)}}" method="POST">
        @csrf
        @method('put')
        <input type="submit" value="Eliminar">
    </form>
@endsection