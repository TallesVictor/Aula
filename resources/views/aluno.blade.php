@extends('template.template')

@section('content')

<div class="container shadow p-3 mb-5 bg-white rounded">

    <div class="row">
        <div class="col-sm text-center">
            <label class="display-4" id="titulo"></label>
        </div>
    </div>
    <div class="row " id="aviso">

    </div>
    <div class="row">
    <h2>Aluno</h2>
    </div>
    <div class="row">
        <div class="col-sm" id="conteudo">

          {{-- @foreach ($aluno as $item)

              <div class="container">
                  <div class="row">
                      {{$item->nome}}
                  </div>
              </div>

          @endforeach --}}
            <table class="table"  id="tableAluno">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Situacao</th>
                    </tr>
                </thead>
                <tbody id="bodyAluno">

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{url("js/aluno/funcoes.js")}}"></script>
<script src="{{url("js/aluno/aluno.js")}}"></script>

@endsection
