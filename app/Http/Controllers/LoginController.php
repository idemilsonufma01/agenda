<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index (Request $request){    

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuário e/ou senha não existe';
        }

        if($request->get('erro') == 2){
            $erro = 'Necessário realizar login para ter acesso a página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro'=> $erro]);
    }

    

    public function autenticar(Request $request){
        //regra de validação
        $regras = [
            'usuario' => 'email', //o name que esta no formulário
            'senha' => 'required'
        ];

        //mensagem de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário(email) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ]; 

        //se não passar pelo validate
        $request->validate($regras, $feedback);

        //variavel de acordo com o banco de dados 
        //recuperamos os parâmetros do formulário

        $email = $request->get('usuario');
        $password = $request->get('senha'); //get(usuario) é o name do formulario

       

        //iniciar o model user
        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)
            ->get()
            ->first();

        if (isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('evento.home');
        } else {
            return redirect()->route ('site.login', ['erro'=>1]); 
        }

                
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }

  


   
}
