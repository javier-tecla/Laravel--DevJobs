<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $datos = $this->validate();

        // Almacenar el CV
        $cv = $this->cv->store('public/cv');
        $datos['imagen'] = str_replace('public/cv', '', $cv);

        // Crear la vacante

        // Crear notificación y enviar el mail

        // Mostrar el usuario un mensaje de ok
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
