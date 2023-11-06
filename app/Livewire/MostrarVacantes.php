<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Attributes\On;
use Livewire\Component;

class MostrarVacantes extends Component
{ 
    // #[On('prueba')] 
    // public function prueba($id)
    // {
    //     dd($id); 
    // } 
    #[On('eliminarVacante')] 
    
    public function eliminarVacante(Vacante $vacante){
        $vacante->delete();
        return redirect(request()->header('Referer'));

    }
  
    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes',[
            'vacantes' => $vacantes
        ]);
    }
}
