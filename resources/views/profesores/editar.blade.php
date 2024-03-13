<x-layouts.layout>

    <form class="flex justify-center h-full items-center" method="post" action="{{route("profesores.update",[$profesor->id])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white p-5 rounded-2xl">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Datos del profesor</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input type="text" value="{{$profesor->nombre}}" name="nombre" id="nombre"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                    <div class="mt-2">
                        <input type="text" value="{{$profesor->apellidos}}" name="apellidos" id="apellido"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-full">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" value="{{$profesor->email}}" name="email" type="email"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="departamento" class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
                    <div class="mt-2">
                        <select  name="departamento" id="departamento"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option @if($profesor->departamento == 'Marketing y Logística') selected @endif>Marketing y Logística</option>
                            <option @if($profesor->departamento == 'Informática') selected @endif>Informática</option>
                            <option @if($profesor->departamento == 'Imagen y Sonido') selected @endif>Imagen y Sonido</option>
                        </select>
                    </div>
                </div>
                <a type="button" class="text-sm font-semibold leading-6 text-gray-900" href="/profesores">Volver al Listado</a>
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Actualizar
                </button>
            </div>
        </div>
    </form>
</x-layouts.layout>
