create database livraria;
use livraria;
-- drop database livraria;

CREATE TABLE users(
	user_id INTEGER PRIMARY KEY auto_increment,
    user_name varchar(50),
    user_email varchar(50),
    user_password varchar(50)    
);

CREATE TABLE books(
	book_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    book_title varchar(50),
    book_author varchar(50),
    user_password varchar(50),    
    book_user_id INTEGER,
    foreign key(book_user_id) references users(user_id)
);

