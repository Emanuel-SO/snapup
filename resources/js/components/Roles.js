import React from 'react';
import ReactDOM from 'react-dom';

export default function Roles(){
    return (
        <div className='container'>
            <p>
                Roles... Emanuel Saucedo Olvera
            </p>
        </div>
    )
}

if (document.getElementById('roles')) {
    ReactDOM.render(<Roles />, document.getElementById('roles'));
}