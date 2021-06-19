create table products (
    id int not null primary key AUTO_INCREMENT,
    name varchar(30),
    category varchar(30),
    price varchar(15)  
);

insert into products (name, category, price) values ("Apple", "Fruit", "300");
insert into products (name, category, price) values ("Pumpkin", "Vegetable", "30");
insert into products (name, category, price) values ("Mango", "Fruit", "50");

