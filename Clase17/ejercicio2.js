console.log("esto es para verificar que paso primero");

setTimeout(
	function(){
		console.log("AJA!‘hola!!!!!!!!!")
	},
	2000
	);
console.log("verificado que paso aca, ahora te mostrara luego de estos segundos el siguiente mensaje:");

// *************************************************************** 
var numero = 10;
setInterval(
	function(){
		numero --;
		console.log(numero);

	if(numero == 0){

		console.log("termino el conteo");
		
		}
	if (numero < 0){
		clearInterval(numero);
	}	
	}
	,1000);
