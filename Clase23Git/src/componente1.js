/*para arrancar se debe importar la biblioteca del REACT */
import React from 'react';

//mismo nombre que le pusiste al archivo con 1ra letraMayuscula
//arme una clase
export default class Componente1 extends React.Component{
    //se trabaja bajo el paradigma objetos
    //es para exportar desde otros componentes
    //y hereda de la clase REACT
    //todo componente debe tener Metodos, metodos Renders , que es propio de REACT

        render(){
            //es el que funcionara cuando se lo invoque
            var titulo = <h1>Titulo de Componente que nos obligo a escribir 1.vFina.jpeg 1 link megaupload</h1>;
            return titulo;
            //cree el componente!
            //como llamo desde la app al componente? => ir al app.js
            

        }
}
