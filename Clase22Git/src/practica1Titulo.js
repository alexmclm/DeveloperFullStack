import React from 'react';

export default class Practica1Titulo extends React.Component{
    render(){
    var titulo = <p><h3>{this.props.name} </h3>: va un titulo para mostrar</p>
           {/* cuando le doy un nombre al Componente, (en la App.js , VERLO), cuando se lo invoca desde el Componente.js
                se debe cambiar la variable y llamarla this.props.name 
                this.
                props
                name  -- es el nombre de la variable que le pusimos*/} 
          return titulo;
         
    }
}