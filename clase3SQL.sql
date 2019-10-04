/*create database clase3; */
/*
 create table clase3.alumno(
  id int AUTO_INCREMENT primary key not null,
  nombre varchar(100),
  apellido varchar(100),
  edad int not null,
  dni int not null,
  curso int
 );
 */
  /*alter table clase3.alumno add dni int not null; AGREGUE CAMPOS A LA TABLA!!*/
 /*alter table clase3.alumno drop contraint id varchar(20);
 select * from clase3.alumno
 */
 /*insert into clase3.alumno (nombre,apellido,edad,dni,curso) values ('Alberto','Rodriguez', 21, 3025814,1001);*/
 
-- select CAMPOSseparadoCONcomas from NOMBRETABLA where....etc 
/* select NOMBREdelaTABLA.NOMBREdelCAMPO  -- me quedo mas con esta version*/
/*select alumno.nombre from clase3.alumno where id= 1; para llamar a un campo con cierta condicion*/

-- insert into clase3.alumno (nombre,apellido,edad,dni,curso) values ('PEdro','Galeardo',25,38541000,1003);
select * from clase3.alumno where nombre = 'Alberto';
