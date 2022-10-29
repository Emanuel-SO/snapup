import React from 'react';
import ReactDOM from 'react-dom';

export default function TablaRoles(props){
    return (
        <div className='container'>
           <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        props.roles.map(role => (
                            <tr key={role.id}>
                                <td>{role.id}</td>
                                <td>{role.name}</td>
                                <td><button>Hola</button></td>

                            </tr>
                        ))
                    }
                </tbody>
            </table>
        </div>
    )
}

if (document.getElementById('table')) {
    const thisElement = document.getElementById('table');

    let props = Object.assign({}, thisElement.dataset);

    ReactDOM.render(<TablaRoles roles={JSON.parse(props.roles)}/>, thisElement);
}