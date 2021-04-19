<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MovimentosFinanceiro;
use Illuminate\Http\Request;

class MovimentoFinanceiroController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $movimentoFinanceiro = MovimentosFinanceiro::latest()->paginate($perPage);

        if (!empty($keyword)) {
            $movimentoFinanceiro = MovimentosFinanceiro::where('descricao', 'LIKE', "%$keyword%")
                ->orWhere('valor', 'LIKE', "%$keyword%")
                ->orWhere('data', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('empresa_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        }

        return view('movimentos_financeiros.index', compact('movimentoFinanceiro'));
    }

    public function create()
    {
        return view('movimentos_financeiros.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descricao' => 'required|string|max:255',
            'data' => 'required',
            'tipo' => 'required',
            'valor' => 'required',
            'empresa_id' => 'required|max:10'
        ]);
        $requestData = $request->all();

        MovimentosFinanceiro::create($requestData);

        return redirect('movimentos_financeiros')->with('flash_message', 'Movimentos_financeiro added!');
    }

    public function show($id)
    {
        $movimentoFinanceiro = MovimentosFinanceiro::findOrFail($id);

        return view('movimentos_financeiros.show', compact('movimentoFinanceiro'));
    }

    public function edit($id)
    {
        $movimentofinanceiro = MovimentosFinanceiro::findOrFail($id);

        return view('movimentos_financeiros.edit', compact('movimentofinanceiro'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descricao' => 'required|string|max:255',
            'data' => 'required',
            'tipo' => 'required',
            'valor' => 'required',
            'empresa_id' => 'required|max:10'
        ]);
        $requestData = $request->all();

        $movimentoFinanceiro = MovimentosFinanceiro::findOrFail($id);
        $movimentoFinanceiro->update($requestData);

        return redirect('movimentos_financeiros')->with('flash_message', 'Movimentos_financeiro updated!');
    }

    public function destroy($id)
    {
        MovimentosFinanceiro::destroy($id);

        return redirect('movimentos_financeiros')->with('flash_message', 'Movimentos_financeiro deleted!');
    }
}
