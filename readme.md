# Sistema de Cadastro de Usuários (CRUD Refatorado)

### Objetivo do Projeto
Este projeto consiste na refatoração, organização e melhoria de um sistema CRUD (Create, Read, Update, Delete) básico desenvolvido em PHP com MySQLi. O objetivo principal foi aplicar boas práticas de programação backend, focado em modularização de código, segurança de sessão, validação de dados e melhoria na experiência do usuário (UX).

---

### Tecnologias Utilizadas
* **PHP 8.x** (Estruturado e Modular)
* **MySQL** (Persistência de dados via extensão MySQLi)
* **HTML5 / CSS3** (Estrutura e estilização visual)
* **JavaScript** (Validações dinâmicas e confirmações de segurança)

---

### Estrutura de Pastas do Projeto
O projeto foi reorganizado para separar as responsabilidades e reutilizar trechos de código redundantes:

```text
GABARITO_CRUD_INICIAL_M1-MAIN/
├── infra/
│   └── db/
│       ├── connect.php         # Conexão centralizada com o banco de dados
│       └── script.sql          # Estrutura das tabelas do banco de dados
├── public/
│   ├── components/             # Trechos de código reutilizáveis (Módulos)
│   │   ├── footer.php          # Rodapé padrão do sistema
│   │   ├── header.php          # Cabeçalho HTML e estilos visuais
│   │   ├── session_check.php   # Trava de segurança para verificação de sessão
│   │   └── table.php           # Componente de listagem de usuários cadastrados
│   ├── editar.php              # Tela de edição de dados do usuário
│   ├── excluir.php             # Script lógico para remoção de registros
│   ├── home.php                # Painel principal (Cadastro e Listagem)
│   └── logout.php              # Script de encerramento de sessão
├── index.php                   # Tela de Login (Ponto de entrada do sistema)
└── README.md                   # Documentação do projeto