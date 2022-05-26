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
        if(!empty($request->input('senha')) && !empty($request->input('nome')) && !empty($request->input('cpfcnpj'))){
            Usuario::create($request->all());
            $return = ['message' => 'Cadastro efetuado com sucesso!'];
            return json_encode($return);
        }else{
            $return = ['message' => 'Erro no cadastro.'];
            return response( json_encode($return), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cpfcnpj
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        
        header('Content-Type: application/json;charset=utf-8');
        $usuario =  Usuario::where('cpfcnpj', $request->input('cpfcnpj'))->where('senha', $request->input('senha'))->first();
        if(!empty($usuario)){
            $return = ['message' => 'Login Efetuado com Sucesso!'];
            return json_encode($return);
        }else{
            $return = ['message' => 'Erro de login.'];
            return response( json_encode($return), 400);
            
        }

    }

    public function logout($cpfcnpj)
    {
        header('Content-Type: application/json;charset=utf-8');
        // $usuario =  Usuario::where('cpfcnpj', '39324090003');
        $usuario =  Usuario::where('cpfcnpj', $cpfcnpj);
        if(!empty($usuario)){
            $return = ['message' => 'Logout Efetuado com Sucesso!'];
            return json_encode($return);
        }else{
            $return = ['message' => 'Erro de logout.'];
            return response( json_encode($return), 400);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cpfcnpj
     * @return \Illuminate\Http\Response
     */
    public function update($cpfcnpj, Request $request)
    {
        $usuario = Usuario::where('cpfcnpj', $cpfcnpj)->first();
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
     * @param  int  $cpfcnpj
     * @return \Illuminate\Http\Response
     */
    public function destroy($cpfcnpj)
    {
        $usuario = Usuario::where('cpfcnpj', $cpfcnpj)->first();
        if(!empty($usuario)){
            $usuario->delete();
            return 'Usuario excluído com sucesso.';
        }else{
            return 'Usuario não encontrado';
        }
    }
}
