<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return 'Cadastro efetuado com sucesso!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $usuario =  Usuario::where('cpfcnpj', $request->input('cpfcnpj'))->where('senha', $request->input('senha'))->first();
        if(!empty($usuario)){
            return 'Login efetuado com sucesso!';
        }else{
            return 'Erro de login';
        }
        

    }

    public function logout(Request $request)
    {
        return 'Logout efetuado com sucesso!';
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $usuario = Usuario::where('id', $id)->first();
        if(!empty($usuario)){
            $usuario->update($request->all());
            return 'Usuario atualizado.';
        }else{
            return 'Usuario não encontrado';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::where('id', $id)->first();
        if(!empty($usuario)){
            $usuario->delete();
            return 'Usuario excluído com sucesso.';
        }else{
            return 'Usuario não encontrado';
        }
    }
}
