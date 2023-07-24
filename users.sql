create database person_details;

create table users(
    id int not null AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    age int,
    address varchar(255),
    Gender varchar(255),
    PRIMARY key(id)
    );