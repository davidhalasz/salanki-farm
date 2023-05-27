<?php

namespace App\Http\Livewire;
use App\Models\Service;
use Livewire\Component;

class SzolgaltatasokShow extends Component
{
    public $services;
    protected $listeners = ['refreshServices' => 'mount'];
    public function mount()
    {
        $this->services = Service::get();
    }

    public function deleteService($id) {
        $service = Service::findOrFail($id);
        $service->delete();
        $this->emit('refreshServices');
    }

    public function render()
    {
        $this->services = Service::get();
        return view('livewire.szolgaltatasok-show');
    }
}
