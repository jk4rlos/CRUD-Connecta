<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    @vite(['resources/css/custom.css'])
</head>
<body class="pagina-inicial">
    <div class="container flex items-center justify-center min-h-screen">
        <div class="conteudo">
            <h1 class="titulo">Bem-vindo à Connecta</h1>
            <p class="descricao">Estamos felizes em tê-lo aqui. Aproveite!</p>
            <p class="descricao">Clique no botão abaixo para realizar login e desfrutar de nosso serviço.</p>
            <a href="{{ route('user.login') }}" class="botao-cadastrar">Login</a>
        </div>
    </div>
</body>
</html>
