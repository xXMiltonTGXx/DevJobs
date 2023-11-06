<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">
        Postularme a esta vacante
    </h3>

    <form wire:submit.prevent='postularme' class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum u Hoja de Vida (PDF)')" />
            <x-text-input id="cv" wire:model="cv" class="block mt-1 w-full" type="file"  accept=".pdf" /> 
                @error('cv')
                    @livewire('mostrar-alerta', ['message' => $message])
                @enderror
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Postularme') }}
        </x-primary-button>
    </form>
</div>
