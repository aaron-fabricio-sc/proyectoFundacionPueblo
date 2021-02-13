<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::where('estado', 1)->orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function cocina()
    {
        $cursos = Curso::where('estado', 1)->where('categoria', 1)->orderBy('id', 'desc')->paginate();

        return view('cursos.cocina
        ', compact('cursos'));
    }
    public function textiles()
    {
        $cursos = Curso::where('estado', 1)->where('categoria', 2)->orderBy('id', 'desc')->paginate();

        return view('cursos.textiles
        ', compact('cursos'));
    }
    public function servicios()
    {
        $cursos = Curso::where('estado', 1)->where('categoria', 3)->orderBy('id', 'desc')->paginate();

        return view('cursos.servicios
        ', compact('cursos'));
    }




    public function create()
    {
        return view("cursos.crear");
    }
    public function store(StoreCurso $request)
    {


        $curso = Curso::create($request->all());


        return redirect(route('curso.show', $curso));
    }

    public function show(Curso $curso)
    {

        return view('cursos.show', compact('curso'));;
    }
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso)
    {


        $curso::updated($request->all());
        return redirect(route('curso.show', $curso));
    }

    public function delete(Curso $curso)
    {


        $curso->estado = 0;
        $curso->save();
        return redirect(route('curso.index'));
    }
}
