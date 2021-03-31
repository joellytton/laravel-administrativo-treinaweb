@extends('layouts.app')

@section('title')
<h1>Listagem de {{$tipo}}</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route("empresas.index")}}?tipo={{$tipo}}">Listagem de {{$tipo}}</a></li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listagem de {{$tipo}}</h3>
                    <div class="card-tools">
                        <a href="{{route('empresas.create')}}?tipo={{$tipo}}" class="btn btn-success">Novo {{$tipo}}</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th class="text-center">Nome Empresa</th>
                                <th class="text-center">Nome Contato</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $empresa)
                            <tr>
                                <td class="text-center">{{$empresa->id}}</td>
                                <td class="text-center">{{$empresa->nome}}</td>
                                <td class="text-center">{{$empresa->nome_contato}}</td>
                                <td class="text-center">{{$empresa->celular}}</td>
                                <td class="text-center">
                                    <a href="http://" class="btn btn-primary">Detalhes</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix">
                    <div class="pagination pagination-md m-0 float-right">
                        {{$empresas->appends(['tipo' => request('tipo')])->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
