<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <figure class="imagen">
        <img src="{{asset('img/logo-fundacion.jpg')}}" alt="fundación pueblo">
    </figure>
    <header>
        <div class="menu">
            <a href="" class="btn"><i class="fas fa-list"></i>Menu</a>
        </div>
        <nav>
            <ul>
                
                    <li class="submenu">
                        <a href="#">PERSONAL<i class="fas fa-angle-down"></i></a>
                        <ul class="listado">
                            <li><a href="registro_personal.php">REGISTRO PERSONAL<i class="fas fa-pencil-alt"></i></a></li>
                            <li><a href="lista_usuarios.php">LISTA USUARIOS<i class="fas fa-clipboard-list"></i></a></li>

                        </ul>
                    </li>
               
                    <li class="submenu">
                        <a href="#"><i class="fas fa-angle-down"></i>DOCENTES</a>

                        <ul class="listado">
                            <li><a href="registro_de_docente.php">REGISTRO DOCENTE<i class="fas fa-pencil-alt"></i></a></li>
                            <li><a href="lista_docentes.php">LISTA DOCENTES<i class="fas fa-clipboard-list"></i></a></li>

                        </ul>

                    </li>
               
                   
                
                    <li class="submenu"><a href="#"><i class="fas fa-angle-down"></i>ESTUDIANTES</a>
                        <ul class="listado">

                            <li><a href="registro_alumnos.php">REGISTRO DE ALUMNOS<i class="fas fa-pencil-alt"></i></a></li>
                            <li><a href="lista_estudiantes_total.php">LISTA DE ALUMNOS<i class="fas fa-clipboard-list"></i></a></li>

                        </ul>
                    
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-angle-down"></i>CURSOS</a>
                        <ul class="listado">
                            <li><a href="{{route('curso.cocina')}}">COMIDA<i class="fas fa-atlas"></i></a></li>
                            <li><a href="{{route('curso.textiles')}}">TEXTILES<i class="fas fa-atlas"></i></a></li>
                            <li><a href="{{route('curso.servicios')}}">SERVICIOS<i class="fas fa-atlas"></i></a></li>
                        </ul>
                    </li>

            </ul>
        </nav>
    </header>

   
    <div class="container">
  @yield('content')
    </div>
   
 <script src="js/jquery-3.4.0.min.js"></script>
    <script src="js/formulario.js"></script>

    <script src="js/app.js"></script>
</body>
</html>