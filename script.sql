create database clinica;

use clinica;

create table Usuario(
name varchar(24) primary key not null,
password varchar(30) not null,
rol int not null
);

create table Rol(
id int auto_increment primary key not null,
name varchar(20) not null
);

create table Medico(
id int auto_increment primary key not null,
first_name varchar(30) not null,
last_name varchar(30) not null,
cedula_prof varchar(7) not null,
telefono int not null
);

create table Paciente(
id int auto_increment primary key not null,
first_name varchar(30) not null,
last_name varchar(30) not null,
med_fam int not null,
password varchar(10) not null,
telefono int not null
);

create table Cita(
id int auto_increment primary key not null,
paciente int not null,
medico int not null,
fecha date not null,
receta blob,
detalles blob,
peso decimal
);

create table Telefono(
id int auto_increment primary key not null,
phonenumber varchar(7),
mobilenumber varchar(10)
);

alter table Usuario add foreign key(rol) references Rol(id) on delete cascade;
alter table Paciente add foreign key(med_fam) references Medico(id) on delete cascade;
alter table Cita add foreign key(paciente) references Paciente(id) on delete cascade;
alter table Cita add foreign key(medico) references Medico(id) on delete cascade;
alter table Paciente add foreign key(telefono) references Telefono(id) on delete cascade;
alter table Medico add foreign key(telefono) references Telefono(id) on delete cascade;
