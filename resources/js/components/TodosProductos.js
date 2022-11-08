import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';


export default function TodosProductos(props){

    const mostrarAlerta=()=>{
        Swal.fire('Any fool can use a computer');
    }

    return (
        <div class='table-responsive'>
           <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                       
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Oferta</th>
                        <th>Descuento</th>
                        <th>Categoria</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        props.productos.map(producto => (
                            <tr key={producto.id}>
                                <td>{producto.nombre}</td>
                                <td>{producto.precio}</td>
                                <td>{producto.cantidad}</td>
                                <td>{producto.oferta}</td>
                                <td>{producto.descuento}</td>
                                <td>{producto.categoria_id}</td>
                                <td>{producto.marca_id}</td>
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

if (document.getElementById('tabla-productos')) {
    const thisElement = document.getElementById('tabla-productos');

    let props = Object.assign({}, thisElement.dataset);
    //lo que lleva el props. es lo que ira en el data- de la vista
    ReactDOM.render(<TodosProductos productos={JSON.parse(props.productos)}/>, thisElement);
}