@extends("layout.plantilla")

@section('title','creador de cursos')


@section('content')
    <h1>Creador de cursos</h1>
    <form action="{{route('curso.store')}}" method="POST">
        @csrf
        <div>
            <label for="">Nombre</label><br>
           

            <input type="text" name="nombre" value="{{old('nombre')}}">
             @error('nombre')
                <br>
                <small><b>"{{$message}}"</b></small>
                <br>
            @enderror
        </div>
        <div>
            <label for="">Categoría</label><br>
            <select name="categoria" id="" >
                <option value="1">Comida</option>
                <option value="2">Textiles</option>
                <option value="3">Servicios</option>

            </select>
            @error('categoria')
                <br>
                <small><b>"{{$message}}"</b></small>
                <br>
            @enderror
        </div>
        <div>
            <label for="descripción">Descripción</label><br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{old('descripcion')}}</textarea>
         @error('descripcion')
                <br>
                <small><b>"{{$message}}"</b></small>
                <br>
            @enderror
        </div>

        
        <div>
            <input type="submit" name="" id="" value="Guardar">
        </div>
    </form>
    
@endsection