import React from 'react';
import { placeholder, thisTypeAnnotation } from '@babel/types';

export default class Practica1Descripcion extends React.Component{
    state ={
        fecha: new Date()
    }
    constructor(props){
        super(props);
        //se lo pone en modo Blind
        this.cambiarFecha = this.cambiarFecha.bind(this);
       
    }
    //metodo para poder cambiar la fechas
    cambiarFecha(){
        this.setState({
            fecha: new Date()
        });
    }

    componentDidMount(){
        console.log("pase por ComponentDidMount de practica1Descripcion");
      }


    render(){
        
       
        return(
        <React.Fragment>
        <p>
            En <h3>{this.props.name}</h3> es la seccion en el que estara el campo para poder poder escribir/describir todo lo que se le antoje
            antes de que me enoje y te bloquee (? 
             </p>
                {/* cuando le doy un nombre al Componente, (en la App.js , VERLO), cuando se lo invoca desde el Componente.js
                se debe cambiar la variable y llamarla this.props.name 
                this.
                props
                name  -- es el nombre del atributo que le pusimos en ela Apps.js*/} 
        {/* return descripcion


        // como esta en una tabla, no puedo poner en un <div></div>
        //etnonces se utiliza el react.fragment */}
        <h2>{this.state.fecha.toString()}</h2> 
        <button onClick={this.cambiarFecha}>Esto Cambia La Fecha</button>      
        
        </React.Fragment>
        );
    }
}