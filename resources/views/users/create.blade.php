<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Show Tecnologia</title>
</head>

<body class="bg-white text-gray-900">

    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo">
                    <a href="{{ route('dashboard') }}" class="nav-link">CONNECTA</a>
                </h2>
                <ul class="list-nav-link">
                    <li><a href="{{route ('user.index')}}" class="nav-link">Usuários</a></li>
                    <li><a href="{{ route('login.destroy') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>

        <main class="form-container">
            <h1 class="form-title">Cadastrar Usuário</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.store') }}" method="post" class="form">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome Completo" value="{{ old('name') }}" class="form-input">
                </div>
            
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Seu Email" class="form-input">
                </div>
            
                <div class="form-group">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha com 6 caracteres" class="form-input">
                </div>
            
                <div class="form-group">
                    <label for="Data_de_Nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" name="Data_de_Nascimento" id="Data_de_Nascimento" class="form-input">
                </div>
            
                <div class="form-group">
                    <label for="Telefone" class="form-label">Telefone</label>
                    <input type="text" name="Telefone" id="Telefone" placeholder="Digite seu telefone" class="form-input">
                </div>
            
                <div class="form-group">
                    <label for="Gênero" class="form-label">Gênero</label>
                    <select name="Gênero" id="Gênero" class="form-input">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-input">
                </div>
            
                <button type="submit" class="form-button">Cadastrar</button>
            </form>
        </main>
    </div>

</body>

</html>
