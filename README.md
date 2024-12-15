# Blog com Laravel e Filament

Projeto `Laravel Sail` com uso do painel administrativo do `Filament PHP`.

## Tecnologias Utilizadas

- PHP 8.4
- Eloquent ORM
- Composer
- Docker & Docker Compose
- PostgreSQL
- PgAdmin
- Livewire
- Tailwind CSS

## Pré-requisitos

Antes de começar, verifique se você possui o Docker e o Docker Compose instalados em sua máquina.

## Como Baixar o Projeto

Para baixar o projeto, utilize o comando git clone

```bash
git clone git@github.com:pierrialexandervidmar/sistema_agenda.git
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

