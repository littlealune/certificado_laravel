<x-layouts.layout>

    <form class="flex justify-center h-full items-center text-white" method="post" action="/profesores" enctype="multipart/form-data">
        @csrf
        <div class="border-2 p-5 rounded-2xl bg-neutral">
            <h2 class="text-base font-semibold leading-7">Datos del profesor</h2>
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
                <div class="sm:col-span-full">
                    <label for="email" class="block text-sm font-medium leading-6">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email"
                               class="w-full input input-accent">
                    </div>
                </div>
                <div class="sm:col-span-full">
                    <label for="departamento" class="block text-sm font-medium leading-6">Departamento</label>
                    <div class="mt-2">
                        <select name="departamento" id="departamento"
                               class="w-full select select-accent">
                            <option>Seleccione un departamento</option>
                            <option>Marketing y Logística</option>
                            <option>Informática</option>
                            <option>Imagen y Sonido</option>
                        </select>
                    </div>
                </div>
                <a type="button" class="text-sm font-semibold leading-6" href="/profesores">Volver al Listado</a>
                <button type="submit"
                        class="btn btn-primary ">
                    Añadir
                </button>
            </div>
        </div>
    </form>
</x-layouts.layout>
