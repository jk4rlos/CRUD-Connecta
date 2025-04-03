<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/login.css')
</head>
<body>
    <div class="login-container">
        <div class="login-content">
            <h2 class="login-title">Bem-vindo de volta!</h2>
            <p class="login-subtitle">Faça login para continuar</p>
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
            <form action="{{ route('user.logged') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" id="password" class="form-input" required>
                </div>
                <div class="form-group">
                    <button href="{{route ('user.logged')}}" class="form-button">Entrar</button>
                </div>
            </form>
            <div class="register-link">
                <p>Não tem uma conta? 
                    <a href="{{ route('login.create-user') }}" class="form-button-link">Cadastrar</a>
                </p>
                
            </div>
        </div>
    </div>
</body>
</html>
