<?php

namespace App\Http\Livewire;
use App\Models\Opening;
use App\Models\Information;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class NyitvatartasForm extends Component
{
    public $openings;
    public $informations;
    public $newInformation;
    public $showSnackbar = false;
    protected $listeners = ['refreshInformations' => 'mount'];

    public function mount()
    {
        $this->openings = Opening::all();
        $this->informations = Information::all();
    }

    public function rules() {
        return [
            'openings.*.closed' => 'boolean',
            'openings.*.start' => 'date_format:H:i',
            'openings.*.end' => 'date_format:H:i',
        ];
    }

    public function submit()
    {
        foreach ($this->openings as $opening) {
            $opening->save();
        }

        if(!empty($this->newInformation)) {
            Information::create([
                'description' => $this->newInformation,
            ]);
            $this->reset('newInformation');
            $this->emit('refreshInformations');
        }
        $this->showSnackbar = true;
    }

    public function deleteInformation($id) {
        $information = Information::findOrFail($id);
        $information->delete();
        $this->emit('refreshInformations');
    }

    public function render()
    {
        return view('livewire.nyitvatartas-form');
    }
}
