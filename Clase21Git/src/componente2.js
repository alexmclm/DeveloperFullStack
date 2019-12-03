/*para arrancar se debe importar la biblioteca del REACT */
import React from 'react';


export default class Componente2 extends React.Component{


        render(){
       
            var fecha = new Date();
            var fechaString = fecha.toString();
            return <div>
                
               <h2> {fechaString} </h2>
            </div>
            

        }
}
