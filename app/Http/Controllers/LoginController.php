<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller{
    
    public function showLoginForm(){
        return view("users.login");
    }
    public function logged(LoginRequest $request)
    {
        $request->validated();
    
        // Busca o usuário pelo e-mail (sem hash)
        $user = User::where('email', $request->email)->first();
    
        // Verifica se o usuário existe e se a senha está correta (em texto puro)
        if (!$user || $user->password !== $request->password) {
            return back()
                ->withInput()
                ->with('error', 'E-mail ou senha inválido.');
        }
    
        // Autentica o usuário manualmente (sem bcrypt)
        Auth::login($user); 
    
        return redirect()->route('user.index');
    }

    public function destroy(){

        Auth::logout();
        return redirect()->route('user.login')->with('success', 'Logout realizado com sucesso!');
    }

    public function create(){
        return view("login.create");
    }

    public function store(UserRequest $request)
{
    // Validação dos dados
    $validatedData = $request->validated();

    // Criando o usuário
    $user = User::create($validatedData);

    // Verificando se o usuário foi criado com sucesso
    if ($user) {
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    } else {
        return redirect()->route('login.create-user')->with('error', 'Falha ao cadastrar o usuário.');
    }
}

}