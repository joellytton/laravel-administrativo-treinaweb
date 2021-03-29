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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
