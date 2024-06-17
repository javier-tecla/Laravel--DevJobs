<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class EditarVacante extends Component
{
    public function render()
    {
         // Consulta BD
         $salarios = Salario::all();
         $categorias = Categoria::all();

        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);

    }
}
