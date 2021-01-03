create table produtos(
	idproduto int not null auto_increment,
	categoria varchar(150),
    descricao varchar(150),
    preco float,
    precovenda float,
    nomeimagem varchar(200),
    primary key(idproduto)
)
engine InnoDB;

create table pedidos(
	nomecliente varchar(100),
    endereco varchar(100),
    telefone varchar(100),
    nomeproduto varchar(100),
    valorunitario varchar(100),
    quantidade int not null,
    valortotal float
)
engine InnoDB;

create table cliente(
    id int not null auto_increment,
	nome varchar(100),
    endereco varchar(100),
    telefone varchar(100),
    primary key(id)
)
engine InnoDB;

create table pedidos(
    id_pedido int not null,
    nomeproduto varchar(100),
    valorunitario varchar(100),
    quantidade int not null,
    valortotal float,
    primary key(id_pedido),
    foreign key(id_pedido) references cliente(id)
)
engine InnoDB;
 
 
 
 
