<x-layouts.layout>
    <div class=" flex flex-col justify-center items-center p-5">
        <div class="card w-1/2 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-primary">Datos del alumno</h2>
                <div class="grid grid-cols-3 gap-3 ">
                    {{--Primera columna--}}
                    <div>
                        <label class="text-secondary">Nombre:</label>
                        <p>{{$alumno->nombre}}</p>
                        <label class="text-secondary">Apellidos:</label>
                        <p>{{$alumno->apellidos}}</p>
                        <label class="text-secondary">Dirección:</label>
                        <p>{{$alumno->direccion}}</p>
                    </div>
                    {{--Segunda columna--}}
                    <div>
                        <label class="text-secondary">Teléfono:</label>
                        <p>{{$alumno->telefono}}</p>
                        <label class="text-secondary">Email:</label>
                        <p>{{$alumno->email}}</p>
                    </div>

                    {{--Segunda columna--}}
                    <div>
                        <fieldset>
                            <legend class="text-secondary">Idiomas que habla {{$alumno->nombre}}:</legend>
                            {{-- @if ($idiomas->isNotEmpty())
                                <p>{{$idiomas}}</p>
                            @else
                                <p>No hay idiomas registrados para este alumno.</p>
                            @endif --}}
                        </fieldset>
                    </div>
                </div>
                <div class="card-actions justify-end">
                    <a type="button" class="btn btn-primary" href="/alumnos">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
