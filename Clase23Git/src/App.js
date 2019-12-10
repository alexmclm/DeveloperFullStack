import React from 'react';
import logo from './logo.svg';
import './App.css'; // cmmo si fuesen los require, ,los includes
//si usare un componente, debere importarlo
import Componente1 from './componente1';
      //name de la clase - nombre del archivo


import Practica1Descripcion from './practica1Descripcion';
import Practica1Titulo from './practica1Titulo';
import Practica1Imagen from './practica1Imagen';
import Componente2 from './componente2';
import Practica2RepetirNombres from './practica2RepetirNombres';
import Practica3HacerTablas from './practica3HacerTablas';

export default App;


var vectorComponentes = [];
//dependiendo de la funcion puede decir 'function' or 'class'

//el vector lo pongo afuera de la app


function App() {

  // ********************************* Practica 2 React Parte 2 ********************************
  // estos nombres en el Array , son los nombres de los titulos que le puse en los componentes
  var componentes = ['Juan Carlos',' Luis Alberto','Ricardo']
  var respuesta = [];

  componentes.forEach(unItem => {respuesta.push(<Practica2RepetirNombres nombre = {unItem} />)})

// ********************************** Otro Modo - que no salio -***************************************
  // mi idea aca es poder cargarle los componentes en un array
  var componentesPusheadosSinEscribirPorArray = [];

  //componentesPusheadosSinEscribirPorArray.push(<Practica2RepetirNombres nombre = {unNombre} />)


// ************************************Otro Modo - que no salio -********************************************

// ************************************ Practica 3 React Parte 3 ***************************************
var vector = [
  { url: 'https://placeimg.com/80/80/people?id=1', title: 'Titulo 1', description: 'Descripcion imagen 1'},
  { url: 'https://placeimg.com/80/80/people?id=2', title: 'Titulo 2', description: 'Descripcion imagen 2'},
  { url: 'https://placeimg.com/80/80/people?id=3', title: 'Titulo 3', description: 'Descripcion imagen 3'},
  { url: 'https://placeimg.com/80/80/people?id=4', title: 'Titulo 4', description: 'Descripcion imagen 4'}
 ]
var unVector = [];
// voy a hacer un forEach
vector.forEach(unItem => {unVector.push(<Practica3HacerTablas datos = {unItem}/>)});
// se hara un return de esto


// ************************************ Practica 3 React Parte 3 - fin - ******************************************

  return (
    
    //aca es donde todo se debe estar dentro de un tag, que es <div></div>
      /* SE LO VA A LLAMAR, y cuando se lo llame te lo transforma en un TAG HTML */

// ******************************* Practica 1 React Parte 1 **********************************

    <div>
     <h1>hola soy el componente etc etc etc etc etc</h1>
         <div>
        <Componente1>

        </Componente1>
        </div>
        <h2><p> ****************************Practica 1 ******************************* </p></h2>
        <div>
          <Componente2 name = "fdsafas">


          </Componente2>
          </div>          
      <h2> ****************************Practica 2 **********************************************</h2>    

      <table>
          <tr>
            <td>
                   <div br float= "left">
                     
                  <Practica1Imagen name = "Imagen De La Tabla">

                 </Practica1Imagen>    
                   </div>
            </td>
            <td>

            <div align = "center">
             <Practica1Titulo name = "TiTulo De La Tabla">

            </Practica1Titulo>    
            </div>  


           <Practica1Descripcion name = "Descripcion De La Tabla">

          </Practica1Descripcion>
          </td>
          </tr>
      </table>
 {/* // ******************************* Practica 1 React Parte 1 ********************************** */}


 {/* ************************ Clase2 React Parte 1 -Repetir Componentes - *********************** */}
          <div >
          <Practica2RepetirNombres nombre = "Juan Carlos"> </Practica2RepetirNombres>  
          </div>
            
          <div >
          <Practica2RepetirNombres nombre = "Luis Alberto"> </Practica2RepetirNombres>    
          </div>
            
          <div >
          <Practica2RepetirNombres nombre = "Ricardo"> </Practica2RepetirNombres> 
          </div>

<h2><p align = "center ">Hasta aca termina La practica de repetir los nombres de los componentes </p></h2>
 

 {/* ********************************* Practica 2 React Parte2 ****************************************** */}
      <div className = "App">
        {respuesta}
      </div>
    
    {/* // y enttonces toda la parte de <Practica2RepetirNombres nombre = "Juan Carlos"> </Practica2RepetirNombres>
    // <Practica2RepetirNombres nombre = "Luis Alberto"> </Practica2RepetirNombres>
    // <Practica2RepetirNombres nombre = "Ricardo"> </Practica2RepetirNombres>
    //  se va , lo puedo borrar y funciona igual */}
{/* // *********************************** Practica 2 React Parte2 ********************************************* */}

{/* // ************************************ Practica 3 React Parte2 ******************************************** */}
    
    <div>
     {unVector}
    </div>


</div>// cierre total!
  
  ); //del return app.js
}
 // vectorComponentes.push(<Practica2RepetirNombres nombre= {unItem} />);
// {/* 
// // function mostrarLista(vector){
// //   return(
// //       <div> className ="App"> 
// //         {vector}
// //       </div>

// //   );

// // }

// // **********************************************************************************************
//  */}

