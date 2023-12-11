<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return user::all();
        return view('index',['produto' => Produto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insereProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $novoProduto = new Produto();
        $novoProduto-> nome = $request->nome;
        $novoProduto-> preco = $request->preco;
        $novoProduto-> imagem = $request->imagem;
        if($novoProduto->save()){
            return redirect('/produto');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    $produto = Produto::find($id);
    return view('visualizar', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view("editProduto",['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        if($produto->save()){
            return redirect('/produto');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        if($produto->delete()){
            return redirect('/produto');
        }
    }
}
