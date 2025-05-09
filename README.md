# Linki 🔗

Este projeto foi desenvolvido utilizando [Laravel](https://laravel.com) para demonstrar os principais conceitos e funcionalidades do framework. O foco é demonstrar estruturas back-end robustas.

## Recursos

-   **Autenticação e Middleware:** Implementação de fluxo de autenticação, proteção de rotas e uso de middleware com [Auth](app/Http/Controllers/Auth/LoginController.php).
-   **Migrations com Versionamento:** Estrutura de migrations para manter o versionamento do banco de dados, como as encontradas em [database/migrations/](database/migrations/).
-   **Registro e Gerenciamento de Usuários:** Cadastro, atualização e remoção de usuários utilizando controllers e Policies.
-   **Seeders e Factories:** Geração de dados fictícios para desenvolvimento e testes.
-   **MVC e Formularios:** Organização do código em Model-View-Controller, com formulários para criação, atualização e exclusão de registros – veja [resources/views/links/create.blade.php](resources/views/links/create.blade.php) e [app/Http/Controllers/LinkController.php](app/Http/Controllers/LinkController.php).
-   **Upload de Arquivos:** Suporte ao upload de imagens e outros arquivos, conforme implementado em [ProfileController](app/Http/Controllers/ProfileController.php).
-   **Rules e Requests Personalizadas:** Validação avançada utilizando Requests (ex.: [RegisterRequest](app/Http/Requests/RegisterRequest.php)) e criação de regras customizadas com [Rules](app/Rules/) para inputs personalizados.
-   **URLs Públicas:** Configuração de URLs públicas para acesso seguro aos recursos armazenados.

## Instalação

1. Clone o repositório.
2. Execute `composer install` para instalar as dependências PHP.
3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente.
4. Execute `php artisan key:generate` para gerar a chave da aplicação.
5. Configure o banco de dados (por exemplo, utilizando SQLite presente em `database/database.sqlite` ou outro).
6. Execute as migrations e seeders:
    ```sh
    php artisan migrate --seed
    ```
7. Inicie o servidor de desenvolvimento:
    ```sh
    php artisan serve
    ```

## ToDo

-   Front-end
