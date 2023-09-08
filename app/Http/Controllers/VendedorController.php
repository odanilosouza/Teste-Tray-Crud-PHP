<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;


class VendedorController extends Controller
{
    public function listarTodosVendedores() {
        $vendedores = Vendedor::all();
        return view('/layouts/vendedores/index', compact('vendedores'));
    }

    public function createView() {

        return view('layouts/vendedores/create');
    }

    public function create(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:vendedores',
        ]);

        $vendedor = new Vendedor();
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        $vendedor->save();

        return redirect('/vendedores');
    }

    public function editView($id) {
        $vendedor = Vendedor::findOrFail($id);
        return view('/layouts/vendedores/edit', compact('vendedor'));
    }

    public function update(Request $request, $id) {

        $vendedor = Vendedor::findOrFail($id);
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        $vendedor->save();

        return redirect('/vendedores')->with('success', 'Vendedor atualizado com sucesso!');
    }

    public function delete($id) {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();

        return redirect('/vendedores')->with('success', 'Vendedor atualizado com sucesso!');
    }

}
