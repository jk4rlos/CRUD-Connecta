<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function create(){
        return view("users.create");
    }

    public function index()
{
    $users = User::orderByDesc('id')->paginate(10);
    return view('users.index',['users'=> $users]);
}

    public function store(UserRequest $request){
       // dd($request);
        try{
       User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'Data_de_Nascimento' => $request->Data_de_Nascimento,
        'Telefone' => $request->Telefone,
        'Gênero' => $request->Gênero,
        'cpf' => $request->cpf,
       ]);

       return redirect()->route('user.create')->with('success', 'Atualização de usuário completa');
        } catch (Exception $e) {
            return redirect()->route('user.create')->withInput()->with('error', 'Falha ao criar usuário.');

        }
    }

    public function edit(User $user){
    return view('users.edit', ['user' => $user]);
    
    }

    public function update(UserRequest $request, User $user){
        try{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'Data_de_Nascimento' => $request->Data_de_Nascimento,
                'Telefone' => $request->Telefone,
                'Gênero' => $request->Gênero,
                'cpf' => $request->cpf,
            ]);
            return redirect()->route('user.edit',['user' => $user->id])->with('success', 'Atualização de usuário completa');
        }catch (Exception $e) {
            return redirect()->route('user.create')->withInput()->with('error', 'Falha ao atualizar dados do usuário.');
        }

    }

    public function show(User $user){
        return view('users.show', ['user' => $user]);
    }

    public function destroy(User $user){
        try{
            $user->delete();
            return redirect()->route('user.index')->with('success', 'Usuário deletado com sucesso');
        }catch (Exception $e) {
            return redirect()->route('user.index')->with('error', 'Falha ao deletar usuário.');
        }
    }
}

