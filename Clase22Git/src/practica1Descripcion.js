import React from 'react';
import { placeholder } from '@babel/types';

export default class Practica1Descripcion extends React.Component{
    render(){
        var descripcion = <p>
            En <h3>{this.props.name}</h3> es la seccion en el que estara el campo para poder poder escribir/describir todo lo que se le antoje
            antes de que me enoje y te bloquee (? 
             </p>
                {/* cuando le doy un nombre al Componente, (en la App.js , VERLO), cuando se lo invoca desde el Componente.js
                se debe cambiar la variable y llamarla this.props.name 
                this.
                props
                name  -- es el nombre del atributo que le pusimos en ela Apps.js*/} 
        return descripcion;     
    }
}