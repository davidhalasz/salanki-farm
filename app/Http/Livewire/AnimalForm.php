<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Animal;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\ImageOptimizer\Optimizers\Jpegoptim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AnimalForm extends Component
{
    use WithFileUploads;
    public $filepath;
    public $name;
    protected $listeners = ['refreshAnimals' => 'mount'];

    public function mount()
    {
        $this->animals = Animal::all();
    }

    public function submit()
    {
        $this->validate([
            'filepath' => 'required|image|max:10000',
            'name' => 'required'
        ],
        [
            'filepath.required' => 'Fájl kiválasztása kötelező',
            'name.required' => 'A név megadása kötelező',
        ]);
        
        $originalFileName =$this->filepath->getClientOriginalName();
        $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $currentFile = $filename.time().'.'.$extension;
        if(!empty($this->filepath)) {
            try {
                $storedImagePath = $this->filepath->storeAs('public/farm-lakoi/', $currentFile);
                $optimizerChain = OptimizerChainFactory::create();

                $optimizerChain->addOptimizer(new Jpegoptim([
                    '--strip-all', // Strip all metadata
                    '--all-progressive', // Optimize for progressive rendering
                    '--max=50', // Set the maximum quality to 80 (adjust as needed)
                ]));


                $storedImagePath1 = Storage::get('public/farm-lakoi/' . $currentFile);
                Log::info($storedImagePath);
                $optimizerChain->optimize($storedImagePath1);

            } catch (\Exception $e) {
                Log::error($e->getMessage());
            }
        }
        Animal::create([
            'filepath' => $currentFile,
            'name' => $this->name,
        ]);

        $this->reset('name');
        $this->reset('filepath');
        $this->emit('refreshAnimals');
    }

    public function deleteAnimal($id) {
        $animal = Animal::findOrFail($id);
        if(Storage::exists('public/farm-lakoi/'.$animal->filepath)) {
            Storage::delete('public/farm-lakoi/'.$animal->filepath);
        }
        $animal->delete();

        $this->emit('refreshAnimals');
    }


    public function render()
    {
        return view('livewire.animal-form');
    }
}
