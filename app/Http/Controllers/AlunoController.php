<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = new Aluno();
        $aluno = $aluno->index();
        return view('aluno', compact('aluno'));
    }

    public function list(){
        $aluno = new Aluno();
        $aluno = $aluno->list();

        if($aluno){
            return json_encode($aluno);
        }

        return response('Aluno não encontrado', 404);
    }
}
