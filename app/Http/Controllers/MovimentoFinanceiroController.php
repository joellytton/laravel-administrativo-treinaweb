<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\MovimentosFinanceiro;
use App\Http\Requests\MovimentoFinanceiroRequest;
use DateTime;

class MovimentoFinanceiroController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->filled('data_inicial') || !$request->filled('data_final')) {
            return redirect()->route('movimentos_financeiros.index', [
                'data_inicial' => (new DateTime('first day of this month'))->format('d/m/Y'),
                'data_final' => (new DateTime('last day of this month'))->format('d/m/Y')
            ]);
        }
        $movimentoFinanceiro = MovimentosFinanceiro::buscaPorIntervalo(
            data_br_para_iso($request->data_inicial),
            data_br_para_iso($request->data_final)
        );

        return view('movimentos_financeiros.index', compact('movimentoFinanceiro'));
    }

    public function create()
    {
        return view('movimentos_financeiros.create');
    }

    public function store(MovimentoFinanceiroRequest $request)
    {
        MovimentosFinanceiro::create($request->all());

        return redirect('movimentos_financeiros')->with('flash_message', 'Movimentos_financeiro added!');
    }

    public function show($id)
    {
        $movimentoFinanceiro = MovimentosFinanceiro::porIdComEmpresaExcluida($id);

        return view('movimentos_financeiros.show', compact('movimentoFinanceiro'));
    }

    public function edit($id)
    {
        $movimentofinanceiro = MovimentosFinanceiro::findOrFail($id);

        return view('movimentos_financeiros.edit', compact('movimentofinanceiro'));
    }

    public function update(MovimentoFinanceiroRequest $request, $id)
    {
        $movimentoFinanceiro = MovimentosFinanceiro::findOrFail($id);
        $movimentoFinanceiro->update($request->all());

        return redirect('movimentos_financeiros')->with('flash_message', 'Movimentos_financeiro updated!');
    }

    public function destroy($id)
    {
        MovimentosFinanceiro::destroy($id);

        return redirect('movimentos_financeiros')->with('flash_message', 'Movimentos_financeiro deleted!');
    }
}
