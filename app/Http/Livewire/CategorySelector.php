<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Lang;

class CategorySelector extends Component
{

    public function render()
    { 
        return view('livewire.category-selector');
    }
}
