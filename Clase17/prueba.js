/*var tot = [1,2,3,4];
var sum = 0;

function sumar(){
    console.log(new Date());
}

setInterval(sumar, 2000);


var personas =   [
                    {
                        "apellido" : "Silva",
                        "nombre" : "Orlando",
                    },
                    {
                        "apellido" : "Brea",
                        "nombre" : "Augusto",
                    },
                    {
                        "apellido" : "Argento",
                        "nombre" : "Pepe",
                    }
                ]

console.log(personas);
console.log(' ');
var personas = personas.map(item => {
    return {
            nombre_completo: item.nombre +' '+item.apellido
    }
})

console.log(personas);
*/
function resolveAfter2Seconds() {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve('resolved');
      }, 2000);
    });
  }
  
  async function asyncCall() {
    console.log('calling');
    var result = await resolveAfter2Seconds();
    console.log(result);
    // expected output: 'resolved'
  }
  
  asyncCall();
/*
  async function realizarPeticionAServidorExterno() {
    var respuesta = await http.get('http://unServer.com');
    return respuesta;
  }*/
