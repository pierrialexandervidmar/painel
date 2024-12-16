# Blog Laravel e painel administrativo Filament

Projeto `Laravel Sail` de um painel administrativo desenvolvido com a fantástica ferramenta de administração `Filament PHP`.

## Tecnologias Utilizadas

- PHP 8.4
- Laravel 11
- Filament PHP v3
- Livewire
- Eloquent ORM
- Composer
- Docker & Docker Compose
- PostgreSQL
- PgAdmin
- Tailwind CSS

## Pré-requisitos

Antes de começar, verifique se você possui o Docker e o Docker Compose instalados em sua máquina.
Se caso utilizar o Windows, recomendamos que use o WSL2.

Se usar uma distro Linux ou WSL2, é aconselhável que atualize as variáveis de ambiente para simplificar seus comandos Sail do Laravel.

Acesse o Bash:
```bash
nano ~/.bashrc
```
Insira a linha ao final do documento
```bash
alias sail='[ -f sail ] && bash sail || ./vendor/bin/sail'
```
`Ctrl + O` para salvar e `Ctrl + x` para sair.
Execute no terminal para finalizar:
```bash
source ~/.bashrc
```

## Como Baixar o Projeto

Para baixar o projeto, utilize o comando git clone

```bash
git clone git@github.com:pierrialexandervidmar/painel.git
cd sistema_agenda
```

Na primeira execução:

```bash
sail compose up --build -d
```

Nas demais pode executar apenas:

```bash
sail compose up -d
```

## Acesso ao Banco de Dados

### Conectando ao PgAdmin

Acesse o PgAdmin pelo navegador em http://localhost:5050.

Faça login usando as credenciais:

- Email: admin@admin.com
- Senha: admin


Crie um novo servidor no PgAdmin:

1. Clique com o botão direito em "Servers" e selecione "Create" > "Server...".
2. Na aba "General", insira um nome (exemplo: Postgres Docker).
3. Na aba "Connection", use as seguintes informações:
4. Host: pgsql
5. Port: 5432
- Username: sail
- Password: password
4. Clique em "Save".

