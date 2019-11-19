var nombre ="juan"; 
/*
	lo mismo si es comilla simple que comilla doble para strings 
*/
console.log(nombre);
//------------**********************--------------------
// function fnAlFinalizar(){
// 	console.log("llamo a finalizar");
// }

// console.log("antes del contador");

//es un contador para que , en este caso, muestre la siguiente funcion asociada, y se ejecuta una sola vez pasado ciertos segundos
// setTimeout(
// 		fnAlFinalizar,
// 		10000);

		

//Funcion anonima
setTimeout(
		function () {
		console.log("llamo a finalizar2_conFuncion anonima")
	},
	10000);

console.log("despues del contador");

//para trabajar con programacion asincronica dobnde en el cual demoro la respuesta a consultas:
//ej_:
// consultaDB().then().catch()//bardoso a la hora de querer trabajar dnetro de la BBDD

// ****************************
// setIntervale(
// 	);

var persona ={
	nombre: "dsfdas2",
	apellido: "Apellido",
	edad: 12
}
console.log(persona.apellido);

class Persona {
	constructor(nombre,apellido,edad){
		this.nombre = nombre;
		this.apellido = apellido;
		this.edad = edad; 
	}	
}
var pers = new Persona("fdsafdasfas","dfgsdfdasfdas",2123);

console.log(pers);