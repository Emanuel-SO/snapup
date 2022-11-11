import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';
import BotonesTablaUsuario from './BotonesTablaUsuario';


export default function Usuarios(props){

    const mostrarAlerta=()=>{
        Swal.fire('Any fool can use a computer');
    }

    return (
        <div className='table-responsive'>
           <table className="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        props.usuarios.map(usuario => (
                            <tr key={usuario.id}>
                                <td>{usuario.id}</td>
                                <td>{usuario.nombre}</td>
                                <td>{usuario.correo}</td>
                                <td className="input-field">
                                    <BotonesTablaUsuario eachRow={usuario.id}/>
                                </td>

                            </tr>
                        ))
                    }
                </tbody>
            </table>
        </div>
    )
}

if (document.getElementById('tabla-usuarios')) {
    const thisElement = document.getElementById('tabla-usuarios');

    let props = Object.assign({}, thisElement.dataset);
    //lo que lleva el props. es lo que ira en el data- de la vista
    ReactDOM.render(<Usuarios usuarios={JSON.parse(props.usuarios)}/>, thisElement);
}