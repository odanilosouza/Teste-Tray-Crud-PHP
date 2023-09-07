<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;


class VendedorController extends Controller
{
    public function index() {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    public function create() {
        return view('vendedores.create');
    }

    public function store(Request $r) {
        //validação de dados
        $request->validate([
            'nome' => 'requred|string|max:255',
            'email' => 'requred|email|unique:vendedores',
        ], [
            'nome.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Por favor, insira um endereço de email valido',
            'email.email' => 'Este endereço de email já está em uso',
        ]);

        //Criação de um novo vendedor
        $vendedor = new Vendedor();
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');

        $vendedor->save();
        //Redirecionamento para páginas de listagem de vendedores
        return redirect()->route('vendedores.index')->with('Sucesso', 'Vendedor criado com sucesso!');
    }

    public function edit($id) {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.edit', compact('vendedor'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:vendedores,email,'.$id,

        ],[
            'nome.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Por favor, insira um endereço de email valido',
            'email.email' => 'Este endereço de email já está em uso',
        ]);

        $vendedor = Vendedor::findOrFail($id) {
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        $vendedor->save();

        //Redirecionamento para páginas de listagem de vendedores
        return redirect()->route('vendedores.index')->with('Sucesso', 'Vendedor atualizado com sucesso!');
        }


    }

    public function delete($id) {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();

        return redirect()->route('vendedores.index')->with('Sucesso', 'Vendedor excluido com sucesso!');

    }
}
