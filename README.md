# ATIVIDADE 9 - PATINHAS COM SEGURANÇA 
## Pet Shop AUamigos

### Funcionalidades:
### CRUD de Clientes

O sistema deverá permitir:

- Cadastrar clientes;
- Listar clientes;
- Editar clientes;
- Excluir clientes;
- Visualizar os dados de um cliente.
- CRUD de Animais

### CRUD de animais

O sistema deverá permitir:

- Cadastrar animais;
- Listar animais;
- Editar animais;
- Excluir animais;
- Associar um animal a um cliente;
- Exibir o nome do responsável pelo animal.

No cadastro do animal, o cliente deverá ser selecionado por meio de uma lista de opções.

### Regras do sistema

1. Todo animal deve possuir um responsável.
2. Um cliente pode possuir vários animais.
3. Um animal pertence a apenas um cliente.
4. Não deve ser possível cadastrar um animal sem informar seu responsável.
5. Os dados devem ser armazenados no MySQL.
6. Todas as operações de CRUD devem funcionar.
7. A listagem dos animais deverá apresentar o nome do responsável, e não apenas o ID do cliente.
8. O sistema deverá utilizar corretamente a chave primária e a chave estrangeira.


## O que foi feio?

Para realizar a atividade foi necessário a utilização do gabarito disponibilizado das atividades anteriores de Editar_pratos e do Crud-livraria. Utilizando esses códigos como base foi muito mais fácil entender a lógica e as funcionalidades que teriam que ser implementadas para a execução da atividade. 
Para uma melhor organização, todas as páginas foram separadas em pastas (database, infra, public e style), e também optei por separar o código para a animais do código para clientes.  

Foi utilizado Prepared Statement para melhorar a segurança.

O "ssi" significa:
- s: string ($titulo)
- s: string ($autor)
- i: inteiro ($ano)

Tive algumas dificuldades no fetch_assoc, mas com ajuda do professor Ícaro eu consegui entender. Infelizmente tive algumas dificuldades em fazer com que o site funcione corretamente, quando clica em cadastrar cliente e cadastrar pet aparece uma mensagem de erro, também não consegui fazer com que o cliente fosse selecionado no cadastro de animal. 
