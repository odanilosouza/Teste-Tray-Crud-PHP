<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vend;
use App\Models\Vendedor;

class VendController extends Controller
{
    public function index() {
        $venda = Vend::all();
        return view('vendas.index', compact('vendas'));
    }

    public function create() {
        return view('vendas.create');
    }

    public function store(Request $request) {
     // Validação dos dados
        $request->validate([
            'data' => 'O campo data é obrigatório',
            'valor.required' => 'O campo valor é obrigatório',
        ]);

         // Criação de uma nova venda
        $venda = new Vend();
        $venda->data = $request->input('data');
        $venda->valor = $request->input('valor');

        $venda->save();

    // Redirecionamento para a página de listagem de vendas
    return redirect()->route('vendas/index')->with('Sucess', 'Venda criada com sucesso!');
    }
    public function update(Request $request, $id) {
        $request->validate([
            'data' => 'required|date',
            'valor' => 'required|numeric',

        ], [
            'data.required' => 'O campo data é obrigatório',
            'valor.required' => 'O campo valor é obrigarório'
        ]);

        $venda = Vend::findOrFail($id);
        $venda->data = $request->input('data');
        $venda->valor = $request->input('valor');
        $venda->save();

        //Redireciona para a página de listagem de vendas
        return redirect()->route('venda/index')->with('sucess', 'Venda atualizada com sucesso!');
    }

    public function delete($id) {
        $venda = Vend::findOrFail($id);
        $venda->delete();

        return redirect()->route('vendas/index')->with('sucesso', 'Venda excluida com sucesso!');

    }



}
