import './bootstrap';
import Swal from 'sweetalert2'
import 'animate.css'

import React from "react";
import Saludo from "./Pages/Saludo.jsx"
import Numero from "./Pages/Numero.jsx";

import {createRoot} from "react-dom/client"

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const react_numero = document.getElementById("react-numero");
const react_saludo = document.getElementById("react-saludo");

if (react_numero) {
    const num = react_numero.getAttribute("numero");
    createRoot(react_numero).render(<Numero numero={num}/>);
}

if (react_saludo)
    createRoot(react_saludo).render(<Saludo />);

const formulario = document.getElementById('botones')

document.querySelectorAll('#botonBorrar').forEach(
    (boton) => boton.addEventListener(
        'click', () => {
            const idEncontrado = boton.dataset.id;
            Swal.fire({
                title: `¿Estás seguro de querer borrar a ${idEncontrado}?`,
                text: "No podrás revertir este cambio",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro",
                showClass:{
                    popup:`
            animate__animated
            animate__fadeInUp
            animate__faster
            `
                },
                hideClass:{
                    popup:`
            animate__animated
            animate__fadeOutDown
            animate__faster
        `
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: idEncontrado + " eliminado correctamente",
                        text: idEncontrado + " ha sido eliminado.",
                        icon: "success"
                    }).then((result)=>
                    {formulario.submit()})
                }
            })
        }
    )
)

function editar_alumno(id) {

}
