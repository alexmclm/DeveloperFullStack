
// manejo el cambio de estado de variables que ingreso
//manejo el boton para realizar algo

state = {
    nombre: '',
    listado: []
    }
    constructor(props) {
    super(props);
    this.handleChange = this.handleChange.bind(this);
    this.mostrarNombre = this.mostrarNombre.bind(this);
    }
  
handleChange(e) {
    this.setState(
        {nombre: e.target.value});
    }
    //
mostrarNombre(){
    alert(this.state.nombre);
}  
//manejo de estado!
async cambiarListado(unEvento){
    //COMO AGREGO ELEMENTO A LA LISTA?
    var nuevoElemento = {id:1 , nombre: "juan"};
    var nuevoElementoSeguido = {nombre: this.state.nombre}
    await this.setState({
        //no puedo llamar a la misma variable "listado: this.state.listado => entonces..."
        //antepongo ... para copiar toda la info de la lista , para poder utilizar
        listado: [...this.state.listado,
            nuevoElemento, // le pongo el nuevoElemento a la lista por metodo pop
            nuevoElementoSeguido // le pongo el nuevoElemento a la lista por metodo pop
        ]
    });
}
//como borrar elementos ? => .slice() , que recibe 1 o 2 elementos por parametro
//devuelve un fragmento de un vector, devolviendote una copia
//que es como el map
//.splice() es como el map pero con efecto!


//y si queremos actualziar?
//es basicamente lo mismo
//recordar que no modifica el vector original, trabaja con las copias, o es recomendado trabajarlo
    render() {
        return (
        <div className="row">
        <input type="form" value={this.state.nombre}
         onChange={this.handleChange} />
         <butto>OK</butto>
        </div>
            )
        }
       