# Sistema de Gestão de Grupos Econômicos

Este é um sistema de gestão para um grupo econômico que possui várias bandeiras, unidades e colaboradores. O sistema permite a administração de grupos econômicos, bandeiras, unidades, e colaboradores, além de gerar relatórios e exportar dados em Excel. (Infelizmente não consegui completalo, faltou a parte de exportação para excel que nao consegui fazer, mas o projeto está aqui, foi ótimo para ganhar expêriencia!).

## Requisitos

- **PHP** 8.1 ou superior
- **Laravel** 10 ou superior
- **MySQL** 5.7 ou superior
- **Composer** para gerenciar dependências
- **Node.js** e **NPM** para o frontend (se necessário)
- **Laravel Excel** para exportação de dados em Excel

## Funcionalidades

### 1. **Gestão de Entidades**
- **Grupo Econômico**: Cadastro, edição, remoção e consulta de grupos econômicos.
- **Bandeira**: Associa uma bandeira a um grupo econômico.
- **Unidade**: Associa uma unidade a uma bandeira, incluindo dados como CNPJ e Razão Social.
- **Colaborador**: Associa colaboradores a uma unidade.

### 2. **Relatórios**
- Geração de relatórios detalhados de colaboradores, incluindo filtros e exportação em Excel.

### 3. **Auditoria**
- Registro de alterações feitas nas entidades (Grupos Econômicos, Bandeiras, Unidades, Colaboradores).
- Armazenamento de informações sobre quem fez a alteração e quando foi feita.

### 4. **Exportação de Dados**
- Exportação de dados para Excel, como relatório de colaboradores.

### 5. **Autenticação**
- Sistema de autenticação de usuários para acesso seguro às funcionalidades.

## Setup do Projeto

### Passo 1: Clonar o Repositório

### Passo 2: Instalar Dependências do Backend
```bash
git clone https://github.com/GustavoPrado20/Sistema-Gestao.git
```

### Passo 2: Instalar Dependências do Backend
- Navegue até o diretório do projeto e execute o comando abaixo para instalar as dependências do Laravel:
```bash
cd Sistema-Gestao
composer install
```
### Passo 3: Configuração do Ambiente
- Copie o arquivo .env.example para .env:

```bash
cp .env.example .env
```
- Em seguida, gere a chave de aplicação:
```bash
php artisan key:generate
```
- Agora, para rodar o Docker com o Laravel Sail, use o comando abaixo para inicializar os contêineres do projeto:
```bash
./vendor/bin/sail up

```

- Configure seu banco de dados no arquivo .env com as credenciais apropriadas:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### Passo 4: Executar as Migrations
- Para criar as tabelas no banco de dados, execute as migrations:

```bash
./vendor/bin/sail artisan migrate
```