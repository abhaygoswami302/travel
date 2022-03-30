<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class OrderFood extends Component
{
    public $service;
    
    public function render()
    {
        return view('categories.order-food');
    }
}
