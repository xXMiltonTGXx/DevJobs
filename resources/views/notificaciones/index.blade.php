<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center my-10">
                        Mis Notificaciones
                    </h1>
                    @forelse ($notificaciones as $notificacion)
                        <div class="p-5 border border-gray-200 md:flex md:justify-between md:items-center">
                            <div>
                                <p>Tienes un nuevo candidato en:
                                    <span class="font-bold">{{ $notificacion->data['nombre_vacante'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notificacion->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 md:mt-0">
                                <a href="#" class="bg-indigo-600 p-3 text-sm uppercase font-bold rounded-lg">Ver Candidatos</a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No hay Notificaciones Nuevas</p>
                    @endforelse 

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
