@extends('layouts.app')

@section('title')
<h1>Detalhes do {{$empresa->tipo}}</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route("empresas.index")}}?tipo={{$empresa->tipo}}">Listagem de
        {{$empresa->tipo}}</a>
</li>
<li class="breadcrumb-item"><a href="{{route("empresas.show", $empresa)}}">Detalhes</a></li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i> {{$empresa->nome}}
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <strong>Razão Social</strong>: {{$empresa->razao_social}} <br>

                            <strong>Documento</strong>: {{$empresa->documento}} <br>

                            <strong>IE/RG</strong>: {{$empresa->ie_rg}} <br>

                            <strong>Observações</strong>: {{$empresa->obersavacao}} <br>
                        </div>

                        <div class="col-sm-6">
                            <address>
                                {{$empresa->logradouro}}, {{$empresa->bairro}} <br>
                                {{$empresa->cidade}} - {{$empresa->estado}} - {{$empresa->cep}} <br>
                                <strong>Nome Contato:</strong> {{$empresa->nome_contato}} <br>
                                <strong>Celular:</strong> {{$empresa->celular}} <br>
                                <strong>Email:</strong> {{$empresa->email}} <br>
                                <strong>Telefone:</strong> {{$empresa->telefone}} <br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{route('empresas.destroy', $empresa)}}?tipo={{$empresa->tipo}}" method="post">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Tem certeza que deseja apagar ?')">
                    Apagar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection