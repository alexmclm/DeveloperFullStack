import React from 'react';

export default class Practica2RepetirNombres extends React.Component{
    render(){
        var saludo = <p align = "center">
            <hr width="50%" ></hr>
            Hola {this.props.nombre} 
            <hr width = "50%"></hr>
            </p>
            //el los .js => es solo codigo html , nada de crear variables y todo eso!
            return saludo;

    }


}