<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $user= $this->route('user');
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'Data_de_Nascimento' => 'nullable|date|before:today',
            'Telefone' => 'nullable|string|max:15',
            'Gênero' => 'nullable|string|max:10',
            'cpf' => 'nullable|string|max:11|unique:users,cpf',
        ];
    }
    public function messages(){
        return [
            "name.required"=> "O campo nome é obrigatório",
            "email.required"=> "O campo email é obrigatório",
            "email.email"=> "O campo email deve ser um endereço de e-mail válido",
            "email.unique"=> "O email já está cadastrado",
            "password.min"=> "O campo senha deve ter pelo menos 6 caracteres",
            "password.required"=> "O campo senha é obrigatório",
            "Data_de_Nascimento.required"=> "O campo Data de Nascimento é obrigatório",
            "Telefone.required"=> "O campo Telefone é obrigatório",
            "Telefone.max"=> "O campo Telefone deve ter no máximo 15 caracteres",
            "Gênero.required"=> "O campo Gênero é obrigatório",
            "cpf.required"=> "O campo cpf é obrigatório",
            "cpf.max"=> "O campo cpf deve ter no máximo 11 caracteres",
            "cpf.unique"=> "O cpf já está cadastrado",
        ];
    }
}