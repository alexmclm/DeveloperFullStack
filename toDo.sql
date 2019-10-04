-- create database tareasToDo;
/*
create table tareasToDo.tareas(
	id int auto_increment primary key not null,
    tarea varchar(100),
    hora varchar(5), -- en realidad deberia ser date // UPdate:  lo elimine
    tareaRealizada bool
);
*/
-- alter table tareasToDo.tareas add column tareaRealizada bool;
-- select * from tareasToDo.tareas;
-- insert into tareasToDo.tareas (tarea,tareaRealizada) values ('llegar a casa', 0);

-- ejercicios de filtrar las tareasFinalizadas
 -- select * from tareasToDo.tareas where tareaRealizada is TRUE;
 
 select * from tareasToDo.tareas where tareaRealizada is False;