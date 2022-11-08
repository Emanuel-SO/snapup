import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';


export default function Categorias(props){

    const mostrarAlerta=()=>{
        Swal.fire('Any fool can use a computer');
    }

    return (
        <div class='table-responsive'>
           <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        props.categorias.map(categoria => (
                            <tr key={categoria.id}>
                                <td>{categoria.id}</td>
                                <td>{categoria.nombre}</td>
                                <td class="input-field">
                                    <div>
                                        <button type="button" class="btn mx-2 btn-warning" onClick={()=>mostrarAlerta()}>Ed</button>
                                        <button type="button" class="btn mx-2 btn-danger" onClick={()=>mostrarAlerta()}>El</button>
                                    </div>
                                </td>

                            </tr>
                        ))
                    }
                </tbody>
            </table>
        </div>
    )
}

if (document.getElementById('tabla-categorias')) {
    const thisElement = document.getElementById('tabla-categorias');

    let props = Object.assign({}, thisElement.dataset);
    //lo que lleva el props. es lo que ira en el data- de la vista
    ReactDOM.render(<Categorias categorias={JSON.parse(props.categorias)}/>, thisElement);
}