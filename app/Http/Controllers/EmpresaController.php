<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo != 'cliente' && $tipo != 'fornecedor') {
            return abort(404);
        }

        $empresas = Empresa::todasPorTipo($tipo);
        return view('empresa.index', compact('empresas', 'tipo'));
    }

    public function create(Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo != 'cliente' && $tipo != 'fornecedor') {
            return abort(404);
        }

        return view('empresa.create', compact('tipo'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
