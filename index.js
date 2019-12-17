
import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App'; //utilizara la app.js
import * as serviceWorker from './serviceWorker';


// ReactDOM.render(<App />, document.getElementById('root')); se elimina esta ruta
ReactDOM.render(
    <Router>
        <Route exact path="/" component={App} /> {/* el path esta realcionado con la componente del caso*/ }
        <Route path="/dos" component={AppDos} /> {/* cuando el usuario ingrese a xx/dos => relacione con el componente para el uso*/}
        <Route path="/tres" component={AppTres} />
        <Route exact path= "/tres/tres" component={AppTresTres} /> {/* el exact es para que a la hora de que el user ingrese a la pagina , no se confunda con otra */}
    </Router>   
    , document.getElementById('root'));



// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
