<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Produto;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProdutosController extends Controller
{
    public function index(Request $request): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $produtos = Produto::latest()->paginate($perPage);

        if (!empty($keyword)) {
            $produtos = Produto::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('descricao', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        }

        return view('produtos.index', compact('produtos'));
    }

    public function create(): View
    {
        return view('produtos.create');
    }

    public function store(Request $request): Response
    {
        $this->validate($request, [
            'nome' => 'required|max:255'
        ]);
        $requestData = $request->all();

        Produto::create($requestData);

        return redirect('produtos')->with('flash_message', 'Produto added!');
    }

 
    public function show($id): View
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.show', compact('produto'));
    }

 
    public function edit($id): View
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.edit', compact('produto'));
    }
   
    public function update(Request $request, $id): Response
    {
        $this->validate($request, [
            'nome' => 'required|max:255'
        ]);
        $requestData = $request->all();

        $produto = Produto::findOrFail($id);
        $produto->update($requestData);

        return redirect('produtos')->with('flash_message', 'Produto updated!');
    }

    public function destroy(Produto $produto): Response
    {
        $produto->delete();

        return redirect('produtos')->with('flash_message', 'Produto deleted!');
    }
}
