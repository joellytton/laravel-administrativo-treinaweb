<?php

namespace App\Http\Controllers\Relatorios;

use DateTime;
use App\Models\Saldo;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaldoEmpresa extends Controller
{
    public function __invoke(Empresa $empresa, Request $request)
    {
        if (!$request->filled('data_inicial') || !$request->filled('data_final')) {
            return \redirect()->route('empresas.relatorios.saldo', [
                'empresa' => $empresa,
                'data_inicial' => (new DateTime('first day of this month'))->format('d/m/Y'),
                'data_final' => (new DateTime('last day of this month'))->format('d/m/Y'),
            ]);
        }

        $saldo = Saldo::buscaPorIntervalo(
            $empresa->id,
            data_br_para_iso($request->data_inicial),
            data_br_para_iso($request->data_final)
        );

        return view('empresa.relatorios.saldo', compact('saldo', 'empresa'));
    }
}
