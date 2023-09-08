<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Vendedor;

class VendaController extends Controller
{
    public function vendas(Request $request, $vendedorId) {
        $vendedor = Vendedor::find($vendedorId);
        if ($vendedor) {
            $vendas = $vendedor->vendas;
        } else {

            $vendas = [];
        }

        return view('layouts/vendas/index', compact('vendedor','vendas'));
    }

    public function createView() {
        return view('layouts/vendas/create');
    }

    public function post(Request $request, $vendedorId) {
        $request->validate([
            'data.required' => 'O campo data é obrigatório',
            'valor.required' => 'O campo valor é obrigatório',
        ]);

        $venda = new Venda();
        $venda->data = $request->input('data');
        $venda->valor = $request->input('valor');
        $venda->vendedor_id = $vendedorId;

        $venda->save();

        return redirect("/vendedores/{$vendedorId}/vendas")->with('Sucess', 'Venda criada com sucesso!');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'data' => 'required|date',
            'valor' => 'required|numeric',

        ], [
            'data.required' => 'O campo data é obrigatório',
            'valor.required' => 'O campo valor é obrigarório'
        ]);

        $venda = Venda::findOrFail($id);
        $venda->data = $request->input('data');
        $venda->valor = $request->input('valor');
        $venda->save();

        return redirect()->route('venda/index')->with('sucess', 'Venda atualizada com sucesso!');
    }

    public function delete($id) {
        $venda = Venda::findOrFail($id);
        $venda->delete();

        return redirect()->route('vendas/index')->with('sucesso', 'Venda excluida com sucesso!');
    }
}
