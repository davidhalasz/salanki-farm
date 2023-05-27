<?php

namespace App\Http\Livewire;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class SzolgaltatasokForm extends Component
{
    use WithFileUploads;
    public $filepath;
    public $name;
    public $description;
    public $showSnackbar = false;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'nullable',
            'filepath' => 'nullable|mimes:pdf,jpg,png,jpeg',
        ], 
        [
            'name.required' => 'Név megadása kötelező.',
        ]);

        $originalFileName =$this->filepath->getClientOriginalName();
        $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $currentFile = $filename.time().'.'.$extension;
        if(!empty($this->filepath)) {
            $this->filepath->storeAs('public/szolgaltatasok/', $currentFile);
        }

        Service::create([
            'name' => $this->name,
            'description' => $this->description,
            'filepath' => $currentFile,
        ]);
        $this->reset('name');
        $this->reset('description');
        $this->reset('filepath');
        $this->showSnackbar = true;
        $this->emit('refreshServices');
    }

    public function render()
    {
        return view('livewire.szolgaltatasok-form');
    }
}
