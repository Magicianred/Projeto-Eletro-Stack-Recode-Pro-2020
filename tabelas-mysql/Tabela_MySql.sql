create table produtos(
	idproduto int not null auto_increment,
	nome varchar(150),
    descricao varchar(150),
    preco float,
    nomeimagem varchar(200),
    primary key(idproduto)
);

create table pedidos(
	nomecliente varchar(100),
    endereco varchar(100),
    telefone varchar(100),
    nomeproduto varchar(100),
    valorunitario varchar(100),
    quantidade int not null,
    valortotal float
);
 
 
 
 
