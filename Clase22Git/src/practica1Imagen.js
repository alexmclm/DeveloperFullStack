import React from 'react';

export default class Practica1Imagen extends React.Component{
    render(){
              {/* cuando le doy un nombre al Componente, (en la App.js , VERLO), cuando se lo invoca desde el Componente.js
                se debe cambiar la variable y llamarla this.props.name 
                this.
                props
                name  -- es el nombre de la variable que le pusimos*/}      
       return <img src = "https://www.frba.utn.edu.ar/wp-content/uploads/2016/08/logo-utn.ba-horizontal-e1471367724904.jpg" width="175" height="100" /> 
    
    }
}