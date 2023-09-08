<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;


class VendedorController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function index() {
        $vendedores = Vendedor::all();
        return view('/layouts/index', compact('vendedores'));
    }

    public function create() {

        return view('layouts/create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:vendedores',
        ]);

        $vendedor = new Vendedor();
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        $vendedor->save();


        return redirect('/vendedores');
        //Redirecionamento para páginas de listagem de vendedores
       // return redirect()->route('/vendedores')->with('Sucesso', 'Vendedor atualizado com sucesso!');

    }

    public function edit($id) {
        //Busca o vendedor pelo ID
        $vendedor = Vendedor::findOrFail($id);
        // Retorna a view de edição com os dados do vendedor
        return view('/layouts/edit', compact('vendedor'));
    }

    public function update(Request $request, $id) {

        $vendedor = Vendedor::findOrFail($id);
        $vendedor->nome = $request->input('nome');
        $vendedor->email = $request->input('email');
        // Salvar o modelo no banco de dados
        $vendedor->save();

        // Redirecionar após a atualização
        return redirect('/vendedores')->with('success', 'Vendedor atualizado com sucesso!');
    }


        public function delete($id) {
            $vendedor = Vendedor::findOrFail($id);
            $vendedor->delete();

            return redirect('/vendedores')->with('success', 'Vendedor atualizado com sucesso!');

        }


    }

