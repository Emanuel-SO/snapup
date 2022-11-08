import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';


export default function Marcas(props){

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
                        props.marcas.map(marca => (
                            <tr key={marca.id}>
                                <td>{marca.id}</td>
                                <td>{marca.nombre}</td>
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

if (document.getElementById('tabla-marcas')) {
    const thisElement = document.getElementById('tabla-marcas');

    let props = Object.assign({}, thisElement.dataset);
    //lo que lleva el props. es lo que ira en el data- de la vista
    ReactDOM.render(<Marcas marcas={JSON.parse(props.marcas)}/>, thisElement);
}