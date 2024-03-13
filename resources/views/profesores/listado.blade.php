<x-layouts.layout>
    @vite(['.\resources\js\app.js'])
    <div class="overflow-x-auto max-h-full bg-base-300">

        <!-- @if(session('session'))
            <h1 class="alert alert-success z-20 flex position-relative" id="alertSession">&#10003; {{session('session')}}</h1>
            <script>
                    const target = document.getElementById('alertSession')
                    window.onload=() => setTimeout(() => target.style.display('none') , 3000)

                document.addEventListener('DOMContentLoaded', function() {
                    const target = document.getElementById('alertSession');

                    // Opacidad 1 = 100%
                    target.style.opacity = 1;

                    // Después de 3 segundos, vamos bajando opacidad
                    setTimeout(function() {
                        let opacity = 1;
                        const interval = setInterval(function() {
                            opacity -= 0.01; // Bajamos en 1% cada vez
                            target.style.opacity = opacity;

                            // Para opacidad 0
                            if (opacity <= 0) {
                                target.style.display = 'none';
                                clearInterval(interval);
                            }
                        }, 15); // 15ms de delay cada 1%
                    }, 3000); // 3000ms (3s) de delay antes de ejecución
                });
            </script>
        @endif -->

        <table class="table table-xs table-pin-rows bg-base-300">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Departamento</th>
                <th>Email</th>
                <th colspan="2"><a href="/profesores/create" class="btn btn-success w-full text-3xl text-green-700"> ADD </a></th>
            </tr>

            @foreach($profesores as $profesor)
                <tr>
                    <td>{{$profesor->nombre}}</td>
                    <td>{{$profesor->apellidos}}</td>
                    <td>{{$profesor->departamento}}</td>
                    <td>{{$profesor->email}}</td>
                    <td>
                        <form action="/profesores/{{$profesor->id}}" method="POST" id="botones">
                            <h1 style="display: none" id="idSeleccionado">{{$profesor->nombre}} {{$profesor->apellidos}}</h1>
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-error" type="button" id="botonBorrar" data-id="{{$profesor->nombre}} {{$profesor->apellidos}}" onClick="confirmDelete(event,this)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-200">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route("profesores.edit", $profesor->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                            </svg>
                        </a>
                    </td>


                </tr>
            @endforeach

        </table>
    </div>
    <script>
        import Swal from "sweetalert2";

        function confirmDelete(event, button) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrarlo!'
            }).then((result) => {
                    console.log("Resultado "+result);
                    if (result.isConfirmed)
                        button.closest('form').submit();
                }

            )

        }
    </script>
</x-layouts.layout>
