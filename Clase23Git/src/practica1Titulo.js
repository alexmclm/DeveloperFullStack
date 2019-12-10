import React from 'react';
// axios para conecetarse con server
import axios from 'axios'; 
export default class Practica1Titulo extends React.Component{
    state={
        listado: []
    }
    async componentDidMount(){
        //nos sirve para sincronizar servers de otros lugares y jugar con estos
        
        var respuesta = await axios.get("https://jsonplaceholder.typicode.com/comments");
        //  pero como lo uso? , osea como veo la info
        //creo un state para guardar en un array y agregar en componentDidMount
        // tal como se ve, asi se guarda la data en la lista
        console.log("pase por ComponentDidMount de practica1Titulo " + respuesta.status);
        if(respuesta.status === 200){ 
            this.setState({listado: respuesta.data});
        }
      }
    //ahora como lo muestro ?? => en el render
 
    render(){
    var mostrarLista = [];

    // reccorer la lista
    this.state.listado.forEach(function(item){

        mostrarLista.push(
        <h2>{item.name}</h2>
        );
    });
        

    return(
        <React.Fragment>
            {mostrarLista}
     <p><h3>{this.props.name} </h3>: va un titulo para mostrar</p>
           {/* cuando le doy un nombre al Componente, (en la App.js , VERLO), cuando se lo invoca desde el Componente.js
                se debe cambiar la variable y llamarla this.props.name 
                this.
                props
                name  -- es el nombre de la variable que le pusimos*/} 
        </React.Fragment>  
          );
    }
}