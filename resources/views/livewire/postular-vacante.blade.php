<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">
        Postularme a esta vacante
    </h3>
    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <p class="font-bold">Opps!</p>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div> 
    @endif 

    @if (session()->has('mensaje'))
        <p class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 rounded-lg">
            {{ session('mensaje') }}
        </p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum u Hoja de Vida (PDF)')" />
                <x-text-input id="cv" wire:model="cv" class="block mt-1 w-full" type="file"  accept=".pdf" /> 
                    @error('cv')
                        @livewire('mostrar-alerta', ['message' => $message])
                    @enderror
            </div> 
            <x-primary-button class="w-full justify-center gap-3" wire:loading.attr="disabled">
                {{ __('Postularme') }}
                <div 
                    wire:loading wire:target="postularme"
                    class="inline-block h-4 w-4 mr-1 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-white motion-reduce:animate-[spin_1.5s_linear_infinite]" 
                    role="status"
                ></div>
            </x-primary-button> 
        </form>
    @endif 
</div>
