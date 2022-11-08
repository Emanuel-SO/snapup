import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';


export default function TodosProductos(props){

    const mostrarAlerta=()=>{
        Swal.fire('Any fool can use a computer');
    }

    return (
        <div className='container'>
           <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>En Oferta</th>
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
                                <td>{producto.descripcion}</td>
                                <td>{producto.precio}</td>
                                <td>{producto.cantidad}</td>
                                <td>{producto.oferta}</td>
                                <td>{producto.descuento}</td>
                                <td>{producto.categoria_id}</td>
                                <td>{producto.marca_id}</td>
                                <td><button onClick={()=>mostrarAlerta()}>Hola</button></td>

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