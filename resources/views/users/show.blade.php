<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Visualizar Usuário</title>
</head>

<body class="bg-gray-50 flex justify-center min-h-screen">
    <div class="main-container w-full max-w-4xl text-center">
        <header class="header mb-8">
            <div class="content-header flex justify-between items-center">
                <h2 class="title-logo">
                    <a href="{{ route('dashboard') }}" class="nav-link">CONNECTA</a>
                </h2>
                <ul class="list-nav-link flex gap-4">
                    <li><a href="{{route ('user.index')}}" class="nav-link">Usuários</a></li>
                    <li><a href="{{ route('login.destroy') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>
            <h1 class="text-3xl font-bold text-blue-700 mb-8">Visualizar Usuário</h1>
        <!-- Main Content -->
        <main class="mt-8 flex flex-col items-center">
                        
            
            <!-- User Flashcard -->
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden w-full max-w-2xl p-8">
                <!-- Dados do Usuário -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 text-left">
                    <!-- Coluna 1 -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Nome</h3>
                            <p class="mt-1 text-gray-900">{{ $user->name }}</p>
                            
                        </div>
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Email</h3>
                            <p class="mt-1 text-gray-900">{{ $user->email }}</p>
                            
                        </div>
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">CPF</h3>
                            <p class="mt-1 text-gray-900">{{ $user->cpf ?? 'Não informado' }}</p>
                            
                        </div>
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Telefone</h3>
                            <p class="mt-1 text-gray-900">{{ $user->Telefone ?? 'Não informado' }}</p>
                            
                        </div>
                    </div>
                    
                    <!-- Coluna 2 -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Data de Nascimento</h3>
                            <p class="mt-1 text-gray-900">
                                @if($user->Data_de_Nascimento)
                                    {{ \Carbon\Carbon::parse($user->Data_de_Nascimento)->format('d/m/Y') }}
                                @else
                                    Não informado
                                @endif
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Gênero</h3>
                            <p class="mt-1 text-gray-900">{{ $user->Gênero ?? 'Não informado' }}</p>
                        </div>
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Data de Cadastro</h3>
                            <p class="mt-1 text-gray-900">{{ $user->created_at->timezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</p>
                        </div>
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase">Última Atualização</h3>
                            <p class="mt-1 text-gray-900">{{ $user->updated_at->timezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex justify-center gap-4">
                    <a href="{{ route('user.edit', $user->id) }}" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Editar
                    </a>
                    <form action="{{ route('user.destroy', ['user' => $user->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Excluir
                        </button>
                    </form>
                </div>
                
                <!-- Back Button -->
                <div class="flex justify-center mt-6">
                    <a href="{{ route('user.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Voltar para lista de usuários
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>