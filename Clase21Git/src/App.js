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



//dependiendo de la funcion puede decir 'function' or 'class'


function App() {
  return (
    //aca es donde todo se debe estar dentro de un tag, que es <div></div>
      /* SE LO VA A LLAMAR, y cuando se lo llame te lo transforma en un TAG HTML */
    <div>
     <h1>hola soy el componente etc etc etc etc etc</h1>
        <div>
        <Componente1>

        </Componente1>
        </div>
        <h2><p> ****************************Practica 1 ******************************* </p></h2>
        <div>
          <Componente2>


          </Componente2>
          </div>          
      <h2> ****************************Practica 2 **********************************************</h2>    

      <table>
          <tr>
            <td>
                   <div br float= "left">
                  <Practica1Imagen>

                 </Practica1Imagen>    
                   </div>
            </td>
            <td>

            <div align = "center">
             <Practica1Titulo>

            </Practica1Titulo>    
            </div>
           <Practica1Descripcion>

          </Practica1Descripcion>
          </td>
          </tr>
      </table>

    </div>
  

  );
}

export default App;
