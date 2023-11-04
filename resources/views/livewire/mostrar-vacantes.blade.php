<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ( $vacantes as $vacante )
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="sapace-y-3">
                    <a href="#" class="text-xl font-bold">{{ $vacante->titulo }}</a>
                    <p class="text-sm text-gray-600 font-bold"> {{ $vacante->empresa}}</p>
                    <p class="text-sm text-gray-500">Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                </div>
                <div class="flex flex-col items-stretch gap-3 mt-5 md:mt-0 md:flex-row">
                    <a href="#" class="bg-slate-800 py-2 text-center px-4 rounded-lg text-white text-xs font-bold uppercase">
                            Candidatos
                    </a>
                    <a href="{{ route('vacantes.edit', $vacante->id) }}" class="bg-blue-800 py-2 text-center px-4 rounded-lg text-white text-xs font-bold uppercase">
                            Editar
                    </a>
                    <a href="#" class="bg-red-600 py-2 text-center px-4 rounded-lg text-white text-xs font-bold uppercase">
                            Eliminar
                    </a>
                </div> 
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
        @endforelse 
        
      
    </div>
    <div class="mt-10">
        {{ $vacantes->links()}}
    </div>
</div>