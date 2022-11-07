import React from 'react';
import ReactDOM from 'react-dom';

export default function TodosProductos(props){
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
                                <td>{producto.descripcion}</td>
                                <td>{producto.precio}</td>
                                <td>{producto.cantidad}</td>
                                <td>{producto.oferta}</td>
                                <td>{producto.descuento}</td>
                                <td>{producto.categoria_id}</td>
                                <td>{producto.marca_id}</td>
                                <td><button>Hola</button><button>Hola</button><button>Hola</button></td>

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

    ReactDOM.render(<TodosProductos productos={JSON.parse(props.productos)}/>, thisElement);
}