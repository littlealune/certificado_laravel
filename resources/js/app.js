import './bootstrap';
import Swal from 'sweetalert2'
import 'animate.css'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const formulario = document.getElementById('botones')
//const boton = document.getElementById('botonBorrar')
//const idEncontrado = document.getElementById('idSeleccionado')
{/* async function disparador()  {
    Swal.fire({
    title: "¿Estás seguro de querer borrar a "+idEncontrado.textContent,
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
            title: idEncontrado.textContent + " eliminado correctamente",
            text: idEncontrado.textContent + " ha sido eliminado.",
            icon: "success"
        }).then((result)=>
            {formulario.submit()})
    }
})} */}

// boton.addEventListener('click', await disparador);

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
