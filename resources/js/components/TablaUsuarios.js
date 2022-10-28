import React from 'react';
import ReactDOM from 'react-dom';

export default function TablaUsuarios(){
    return (
        <div className='container'>
           <table>
                <thead>Roles</thead>
                <tbody>
                    <tr>
                        <td>Ejemplo 1</td>
                        <td>Emanuel Saucedo</td>
                    </tr>
                    <tr>
                        <td>Ejemplo 1</td>
                        <td>Emanuel Saucedo</td>
                    </tr>
                    <tr>
                        <td>Ejemplo 1</td>
                        <td>Emanuel Saucedo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    )
}

if (document.getElementById('tables')) {
    ReactDOM.render(<TablaUsuarios />, document.getElementById('tables'));
}