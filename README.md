# CRUD Show Tecnologia!

Este projeto é um sistema de CRUD (Create, Read, Update, Delete) desenvolvido em PHP para gerenciar informações de tecnologia.

## Configurações do Projeto

- **Linguagem:** PHP 8 ou superior
- **Servidor Web:** WampServer 64-bit
- **Banco de Dados:** MySQL 5.7 ou superior
- **Frontend:** HTML5, CSS3, JavaScript
- **Frameworks Utilizados:**
    - Bootstrap 5.0 (para estilização)
    - jQuery 3.6 (para interatividade)
- **Gerenciador de Dependências:** Composer

## Estrutura de Diretórios

- `/assets`: Arquivos estáticos como CSS, JS e imagens.
- `/includes`: Arquivos PHP reutilizáveis (conexão com banco, cabeçalho, rodapé).
- `/pages`: Páginas principais do CRUD.
- `/sql`: Scripts SQL para criação e configuração do banco de dados.
- `/vendor`: Diretório gerenciado pelo Composer para dependências.

## Requisitos

1. Instale o WampServer e configure o ambiente.
2. Crie um banco de dados MySQL chamado `crud_tecnologia`.
3. Importe o arquivo SQL localizado em `/sql/database.sql`.
4. Configure o arquivo `/includes/db.php` com as credenciais do banco de dados.
5. Instale as dependências do projeto executando `composer install` no diretório raiz.

## Versões

- **PHP:** 7.4.33
- **MySQL:** 5.7.36
- **Bootstrap:** 5.0.2
- **jQuery:** 3.6.0
- **Composer:** 2.5.8

## Como Executar

1. Configurar o arquivo .env:
   - Duplicar o arquivo ".env.example" e renomear para ".env"
   - Alterar no arquivo ".env" as credenciais do banco de dados

2. Instalar as dependências do PHP:
   composer install

3. Gerar a chave no arquivo .env:
   php artisan key:generate
   
## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 22 ou superior - Conferir a versão: node -v
* GIT - Conferir a instalação: git -v

## Como rodar o projeto baixado

Baixar os arquivos do GitHub.
```
git clone <repositorio_url> .
```
```
git clone  .
```

- Duplicar o arquivo ".env.example" e renomear para ".env".

Alterar no arquivo .env as credenciais do banco de dados.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=users
DB_USERNAME=root
DB_PASSWORD=
```

Instalar as dependências do PHP
```
composer install
```

Instalar as dependências do Node.js.
```
npm install
```

Gerar a chave para o arquivo .env.
```
php artisan key:generate
```

Executar as migration para criar a base de dados e as tabelas.
```
php artisan migrate
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Executar as bibliotecas Node.js.
```
npm run dev
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

## Sequência para criar o projeto

Criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

Criar a Controller.
```
php artisan make:controller NomeController
```
```
php artisan make:controller UserController
```

Criar a View.
```
php artisan make:view nome
```
```
php artisan make:view users/create
```

Executar as migration para criar a base de dados e as tabelas.
```
php artisan migrate
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as bibliotecas Node.js.
```
npm run dev
```

Criar um arquivo Request com validações do formulário.
```
php artisan make:request NomeDoRequest
```
```
php artisan make:request UserRequest
```

Traduzir para português [Módulo pt-BR](https://github.com/lucascudo/laravel-pt-BR-localization).


## Autor

Este projeto foi desenvolvido por [José Carlos de Souza Neto](https://github.com/jk4rlos).