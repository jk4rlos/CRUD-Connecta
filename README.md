<h1 align="center">
  CRUD Connecta!
</h1>

<p align="center">
  Um sistema CRUD (Create, Read, Update, Delete) em Laravel para gerenciar informações de tecnologia.
</p>

<p align="center">
  <a href="#-tecnologias">Tecnologias</a> •
  <a href="#-requisitos">Requisitos</a> •
  <a href="#-como-rodar">Como Rodar</a> •
  <a href="#-autor">Autor</a>
</p>

<p align="center">
  <img src="URL_DO_SEU_GIF_OU_IMAGEM.gif" alt="Demonstração do CRUD">
</p>

## 🛠️ Tecnologias

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP_8.2+-777BB4?style=flat-square&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Node.js_22+-339933?style=flat-square&logo=node.js&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Composer-885630?style=flat-square&logo=composer&logoColor=white" />
  <img src="https://img.shields.io/badge/Git-F05032?style=flat-square&logo=git&logoColor=white" />
</p>

## 📋 Requisitos

Para rodar este projeto localmente, você precisará ter as seguintes ferramentas instaladas:

| Ferramenta | Versão Mínima | Comando de Verificação |
| :--- | :--- | :--- |
| **PHP** | 8.2+ | `php -v` |
| **Composer** | - | `composer --version` |
| **Node.js** | 22+ | `node -v` |
| **Git** | - | `git -v` |

## 🚀 Como Rodar

Siga os passos abaixo para configurar e executar o projeto:

1.  **Clone o repositório**
    ```bash
    git clone [https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git](https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git) .
    ```

2.  **Configure o Ambiente**
    * Copie o arquivo `.env.example` para `.env`
        ```bash
        cp .env.example .env
        ```
    * Abra o arquivo `.env` e configure suas credenciais do banco de dados (MySQL).

3.  **Instale as Dependências (PHP)**
    ```bash
    composer install
    ```

4.  **Instale as Dependências (JS)**
    ```bash
    npm install
    ```

5.  **Gere a Chave da Aplicação**
    ```bash
    php artisan key:generate
    ```

6.  **Crie as Tabelas do Banco**
    ```bash
    php artisan migrate
    ```

7.  **Inicie os Servidores**
    * Inicie o servidor do Laravel (em um terminal):
        ```bash
        php artisan serve
        ```
    * Inicie o compilador de assets (em outro terminal):
        ```bash
        npm run dev
        ```

8.  **Acesse**
    * Abra seu navegador em `http://127.0.0.1:8000`

---

## 👨‍💻 Autor

Feito por **José Carlos de Souza Neto**

<a href="https://github.com/jk4rlos" target="_blank">
  <img src="https://img.shields.io/badge/GitHub-181717?style=flat-square&logo=github&logoColor=white" />
</a>
