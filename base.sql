drop database if exists cetec;
create database cetec;
use cetec;
create table alumnos(
    id int primary key AUTO_INCREMENT,
    nombre varchar (50),
    edad Int,
    carrera varchar (50),
    equipo_computo Int,
    promedio float
);