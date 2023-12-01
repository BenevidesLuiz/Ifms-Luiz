<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return user::all();
        return view('index',['usuarios' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insereUsuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $novoUsuario = new User();
        $novoUsuario-> name = $request->nome;
        $novoUsuario-> email = $request->email;
        $novoUsuario-> password = $request->senha;
        if($novoUsuario->save()){
            return redirect('/usuario');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    $usuario = User::find($id);
    return view('usuario', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        return view("editUsuario",['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = $request->senha;
        if($usuario->save()){
            return redirect('/usuario');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        if($usuario->delete()){
            return redirect('/usuario');
        }
    }
}
