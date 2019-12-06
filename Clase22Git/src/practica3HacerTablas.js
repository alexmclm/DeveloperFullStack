import React from 'react';
import { throwStatement } from '@babel/types';
import Practica1Descripcion from './practica1Descripcion';
import Practica1Imagen from './practica1Imagen';
import Practica1Titulo from './practica1Titulo';

export default class Practica3HacerTablas extends React.Component{
    render(){
        // var title = <p>
        //     {this.props.title} 
        //     </p>
            
        //     return title;
        {
       
            return (
                // debo devolver escencialmente un <div>
                <div>
                    <table border="2px solid black">
                        <tr>
                            <td>
                                <>
                                    <Practica1Imagen imagen = {this.props.nurl}/>
                                </>
                            </td>
                            <td>
                                <>
                                    <Practica1Titulo titulo = {this.props.title}/>
                                </>
                                <>
                                    <Practica1Descripcion descripcion = {this.props.description}/>
                                </>
                            </td>
                        </tr>
                    </table>
                </div>
            );
        }
    }


}