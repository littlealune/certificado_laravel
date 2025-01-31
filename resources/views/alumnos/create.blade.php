<x-layouts.layout>

    <form class="flex justify-center h-full items-center text-white" method="post" action="/alumnos" enctype="multipart/form-data">
        @csrf
        <div class="p-5 rounded-2xl bg-neutral">
            <h2 class="text-base font-semibold leading-7">Datos del alumno</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6">Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" id="nombre"
                               class="w-full input input-accent">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="apellido" class="block text-sm font-medium leading-6">Apellido</label>
                    <div class="mt-2">
                        <input type="text" name="apellidos" id="apellido"
                               class="w-full input input-accent">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email"
                               class="w-full input input-accent">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="telefono" class="block text-sm font-medium leading-6">Teléfono</label>
                    <div class="mt-2">
                        <input id="telefono" name="telefono" type="text"
                               class="w-full input input-accent">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="direccion" class="block text-sm font-medium leading-6">Dirección</label>
                    <div class="mt-2">
                        <input type="text" name="direccion" id="direccion"
                               class="w-full input input-accent">
                    </div>
                </div>
                <a type="button" class="text-sm font-semibold leading-6" href="/alumnos">Volver al Listado</a>
                <button type="submit"
                        class="btn btn-primary ">
                    Añadir
                </button>
            </div>
        </div>
    </form>
</x-layouts.layout>
