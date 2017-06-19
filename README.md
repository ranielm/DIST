# DIST
Projeto desenvolvido para a disciplina PDSI II ministrada no curso de BSI-UFU.

# PARA FAZER:
* COMBOBOX no front-end de cadastro de usuários para que apenas setores que existam sejam exibidos para cadastro do usuário.
* Validação de dados no cadastro de usuário/produto para que a mensagem de sucesso não seja exibida caso o usuário/produto não seja inserido com sucesso.
* Remover o produto estático na listagem de produtos após os testes.
* Otimizar o uso de sessões de usuário para que não seja necessário inserir a senha a cada operação.
* Utilizar o recurso de autenticação do PHP para que o sistema fique mais seguro.

(18/06/2017)
Essa versão é a que foi apresentada para a sala durante a primeira reunião - CRUD usuário. 

O que é necessário para que essa aplicação rode em sua máquina? (Ainda não colocamos ela em produção)

1. Ter o apache2 instalado e funcionando.
2. Ter o PostgreSQL instalado e funcionando. 
3. Criar uma database com o nome "dist" e seguir os nomes de usuário e senha encontrados no arquivo "banco.php" contido nesse projeto.
4. Criar e popular as tabelas dentro dessa database conforme está nesse arquivo, removendo as sintaxes referentes ao PHP (EOF...).
5. A aplicação já está pronta para rodar localmente dentro de uma pasta chamada "dist" que deve ser criada dentro do diretório raiz do apache.
6. Após isso, só copiar e colar todos os arquivos nessa pasta recém criada.
