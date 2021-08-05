create table lojas(
	id int unsigned not null unique auto_increment,
	nome varchar(100) not null,
	telefone varchar(100) not null,
	endereco varchar(100) not null,
    primary key(id)
);

create table produtos(
	id int unsigned unique auto_increment,
    lojas_id int unsigned not null,
    nome varchar(100) not null,
    preco decimal not null,
    quantidade int unsigned not null,
    primary key (id),
    constraint fk_produtos_loja_id
		foreign key (lojas_id) references lojas(id) 
);

insert into lojas(nome, telefone, endereco) values('RBA', '0000-0000', 'Rua Nebraska');
insert into produtos (lojas_id, nome, preco, quantidade) values (1, 'Teclado', 60.00, 20);

select * from lojas;

select * from produtos;

select lojas.nome as loja, 
	produtos.nome as produto,
    produtos.preco as preco,
    produtos.quantidade as quantidade 
from produtos 
inner join lojas on produtos.lojas_id = lojas.id 
where produtos.nome = 'teclado'  ;

select 
	lojas.nome as loja,
    produtos.nome as produto,
    produtos.preco as preco
from produtos
inner join lojas on produtos.lojas_id = lojas.id
where produtos.nome = "teclado";

