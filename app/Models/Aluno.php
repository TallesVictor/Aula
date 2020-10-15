<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aluno extends Model
{
    protected $table="alunos";
    protected $fillable=['id', 'nome', 'email', 'situacao', 'estado', 'cep', 'cidade', 'bairro', 'numero', 'created_at',  'updated_at'];

    public function index(){
        $select = "SELECT * FROM alunos";
        return DB::select($select);
    }

    public function list(){
        $select = "SELECT * FROM alunos";
        return DB::select($select);
    }
}
