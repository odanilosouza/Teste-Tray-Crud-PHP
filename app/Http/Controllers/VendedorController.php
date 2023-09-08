<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;


class VendedorController extends Controller
{
    public function index() {
        $vendedores = Vendedor::all();
        return view('layouts/app', compact('vendedores'));
    }

    public function create() {

        return view('layouts/create');
    }

    public function store(Request $request) {
        //validação de dados
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:vendedores',
        ]);

        // Vendedor::create([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        // ]);

        $vendedor = new Vendedor();
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        // dd($vendedor);
        $vendedor->save();


        return redirect('/welcome');
        //Redirecionamento para páginas de listagem de vendedores
       // return redirect()->route('/vendedores')->with('Sucesso', 'Vendedor atualizado com sucesso!');

    }

    public function edit($id) {
        //Busca o vendedor pelo ID
        $vendedor = Vendedor::findOrFail($id);
    // Retorna a view de edição com os dados do vendedor
    return view('vendedores.edit', compact('vendedor'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:vendedores,email,'.$id,

        ],[
            'nome.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Por favor, insira um endereço de email valido',
            'email.email' => 'Este endereço de email já está em uso',
        ]);

        $vendedor = Vendedor::findOrFail($id);
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        $vendedor->save();

        //Redirecionamento para páginas de listagem de vendedores
        return redirect('/vendedores')->with('Sucesso', 'Vendedor atualizado com sucesso!');
        }

        public function delete($id) {
            $vendedor = Vendedor::findOrFail($id);
            $vendedor->delete();

            return redirect()->route('vendedores.index')->with('Sucess', 'Vendedor excluido com sucesso!');

        }


    }

