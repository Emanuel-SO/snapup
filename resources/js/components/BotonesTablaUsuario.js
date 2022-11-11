import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';


export default function BotonesTablaUsuario(props){

    const mostrarAlerta=()=>{
        Swal.fire('Any fool can use a computer');
    }

    return (
        <div>
            <button type="button" className="btn mx-2 btn-warning" onClick={()=>mostrarAlerta()}>Editar</button>
            <button type="button" class Name="btn mx-2 btn-danger" onClick={()=>mostrarAlerta()}>Elimiar</button>
        </div>
    )
}


