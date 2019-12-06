/*para arrancar se debe importar la biblioteca del REACT */
import React from 'react';


export default class Componente2 extends React.Component{


        render(){
       
            var fecha = new Date();
            var fechaString = fecha.toString();
            return <div>
                {/* cuando le doy un nombre al Componente, (en la App.js , VERLO), cuando se lo invoca desde el Componente.js
                se debe cambiar la variable y llamarla this.props.name 
                this.
                props
                name  -- es el nombre de la variable que le pusimos*/} 
               <h2> {this.props.name} </h2>
            </div>
            

        }
}
