<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Price;
class ArakForm extends Component
{
    public $name;
    public $price;
    public $showSnackbar = false;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'price' => 'required',
        ], 
        [
            'name.required' => 'Név megadása kötelező.',
            'price.required' => 'Ar megadása kötelező.',
        ]);

        Price::create($validatedData);
        $this->reset('name');
        $this->reset('price');
        $this->showSnackbar = true;
        $this->emit('refreshPrices');
    }

    public function render()
    {
        return view('livewire.arak-form');
    }
}
