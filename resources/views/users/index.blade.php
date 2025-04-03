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
                    <li><a href="{{route('user.create')}}" class="nav-link">Cadastrar</a></li>
                    <li><a href="{{ route('login.destroy') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>

        <h1 class="text-3xl font-bold text-blue-700 text-center">Listagem de Usuários</h1>
        <br>

        <div class="bg-white shadow-md rounded-lg overflow-hidden w-full">
            <!-- Tabela grande (Aparece apenas em telas maiores) -->
            <div class="hidden md:block w-full">
                <table class="bg-white shadow-md rounded-lg overflow-hidden w-full">
                    <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-4 text-center w-[2%]">ID</th>
                            <th class="py-3 px-4 text-center w-[15%]">Nome</th>
                            <th class="py-3 px-4 text-center w-auto break-words">Email</th>
                            <th class="py-3 px-4 text-center w-[10%]">CPF</th>
                            <th class="py-3 px-4 text-center w-[10%]">Telefone</th>
                            <th class="py-3 px-4 text-center w-[10%]">Gênero</th>
                            <th class="py-3 px-4 text-center w-[10%]">Nascimento</th>
                            <th class="py-3 px-4 text-center w-[10%]">Criação</th>
                            <th class="py-3 px-4 text-center w-[10%]">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="border-b border-gray-300 hover:bg-gray-100">
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-200">
                                <td class="py-3 px-4 text-center">{{ $user->id }}</td>
                                <td class="py-3 px-4 text-center whitespace-nowrap">{{ $user->name }}</td>
                                <td class="py-3 px-4 text-center break-words">{{ $user->email }}</td>
                                <td class="py-3 px-4 text-center whitespace-nowrap">{{ $user->cpf }}</td>
                                <td class="py-3 px-4 text-center whitespace-nowrap">{{ $user->Telefone }}</td>
                                <td class="py-3 px-4 text-center">{{ $user->Gênero }}</td>
                                <td class="py-3 px-4 text-center">{{ $user->Data_de_Nascimento }}</td>
                                <td class="py-3 px-4 text-center">
                                    {{ $user->created_at ? $user->created_at->format('d/m/Y') : '-' }}
                                </td>
                                <td class="py-3 px-4 text-center">
                                    <div class="flex justify-center space-x-4">
                                        <!-- Link Editar -->
                                        <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                            class="text-blue-600 hover:text-blue-900 flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            Editar
                                        </a>

                                        <!-- Link Visualizar -->
                                        <a href="{{ route('user.show', ['user' => $user->id]) }}"
                                            class="text-yellow-600 hover:text-yellow-900 flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M10 2C5.454 2 1.73 5.11.11 9.29a1 1 0 000 .82C1.73 14.89 5.454 18 10 18s8.27-3.11 9.89-7.29a1 1 0 000-.82C18.27 5.11 14.546 2 10 2zm0 14c-3.978 0-7.19-2.5-8.65-6 1.46-3.5 4.672-6 8.65-6s7.19 2.5 8.65 6c-1.46 3.5-4.672 6-8.65 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            Visualizar
                                        </a>

                                        <!-- Formulário Excluir -->
                                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST"
                                            class="flex flex-col items-center">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900 flex flex-col items-center"
                                                onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                Excluir
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Paginação (aparece abaixo da tabela grande) -->
            <div class="pagination mt-4 flex justify-center shadow-none">
                {{ $users->links() }}
            </div>

            <!-- Layout responsivo para telas pequenas -->
            <div class="md:hidden mt-4">
                @foreach ($users as $user)
                    <div class="bg-gray-100 rounded-lg shadow-md p-4 mb-4">
                        <p><strong>ID:</strong> {{ $user->id }}</p>
                        <p><strong>Nome:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>CPF:</strong> {{ $user->cpf }}</p>
                        <p><strong>Telefone:</strong> {{ $user->Telefone }}</p>

                        <p><strong>Gênero:</strong> {{ $user->Gênero }}</p>
                        <p><strong>Data de Nascimento:</strong> {{ $user->Data_de_Nascimento }}</p>
                        <p><strong>Data de Criação:</strong>
                            {{ $user->created_at ? $user->created_at->format('d/m/Y') : '-' }}</p>
                        <div class="mt-2 flex justify-between">
                            <a href="{{route('user.edit', ['user' => $user->id])}}"
                                class="text-blue-600 hover:text-blue-900">Editar</a>
                            <a href="#" class="text-yellow-600 hover:text-yellow-900">Visualizar</a>
                            <form action="{{ route('user.destroy', ['user' => $user->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Paginação (para telas pequenas) -->
            <div class="pagination mt-4 flex justify-center md:hidden">
                {{ $users->links() }}
            </div>

        </div>
    </div>

</body>

</html>