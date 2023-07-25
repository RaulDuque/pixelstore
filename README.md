Título do Projeto:

Sistema de Gerenciamento de Produtos

Descrição do Projeto:

O Sistema de Gerenciamento de Produtos é uma aplicação web desenvolvida em Laravel que permite aos usuários cadastrar, visualizar, editar e excluir produtos de um catálogo. A aplicação possui uma interface amigável e intuitiva, facilitando o gerenciamento de produtos de forma eficiente.

Instruções para Executar o Projeto:

1. Clonando o Repositório:

Abra o terminal ou prompt de comando e navegue até o diretório onde deseja clonar o repositório. Execute o seguinte comando:

git clone https://github.com/RaulDuque/pixelstore.git

2. Instalando as Dependências do Composer:

Navegue até o diretório do projeto clonado e execute o seguinte comando para instalar as dependências do projeto usando o Composer:

bash
cd nome-da-pasta
composer install

3. Configurando o Ambiente:

Faça uma cópia do arquivo .env.example e renomeie para .env. Abra o arquivo .env e configure as informações do banco de dados, como nome do banco, usuário e senha.

makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=seu-host
DB_PORT=seu-port
DB_DATABASE=seu-banco
DB_USERNAME=seu-usuario
DB_PASSWORD=sua-senha

4. Executando as Migrações:

Após configurar o arquivo .env, execute o seguinte comando para executar as migrações e criar as tabelas no banco de dados:


php artisan migrate

5. Gerando a Chave de Criptografia:

Execute o seguinte comando para gerar a chave de criptografia da aplicação:

php artisan key:generate

6. Iniciando o Servidor:

Para iniciar o servidor da aplicação, execute o seguinte comando:

php artisan serve

7. Acessando a Aplicação:

Abra o navegador e acesse a URL http://localhost:8000 para acessar a aplicação. Agora você pode cadastrar, visualizar, editar e excluir produtos no sistema de gerenciamento.

Observação: Certifique-se de ter o PHP instalado no seu sistema e configurado no PATH do ambiente.

Lembre-se de adaptar as informações do banco de dados e as URLs de acordo com o seu ambiente e configurações específicas.
