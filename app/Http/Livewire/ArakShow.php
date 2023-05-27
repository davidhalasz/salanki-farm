<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Price;

class ArakShow extends Component
{
    public $prices;
    protected $listeners = ['refreshPrices' => 'mount'];
    public function mount()
    {
        $this->prices = Price::all();
    }

    public function deletePrice($id) {
        $price = Price::findOrFail($id);
        $price->delete();
        $this->emit('refreshPrices');
    }

    public function render()
    {
        return view('livewire.arak-show');
    }
}
