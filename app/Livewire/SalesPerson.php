<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;

class SalesPerson extends Component
{
    public function render()
    {
        $about = About::all();
        return view('livewire.sales-person', compact('about'));
    }
}
