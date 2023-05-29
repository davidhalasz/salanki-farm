<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

use Livewire\Component;

class GalleryForm extends Component
{
    use WithFileUploads;

    public $files = [];
    public $prevFiles = [];
    protected $listeners = ['refreshGallery' => 'mount'];


    public function mount()
    {
        $this->galleries = Gallery::all();
    }


    public function updatedFiles()
    {
        $uniqueFiles = [];
        $isDuplicate = false;
        $this->prevFiles = array_merge($this->files, $this->prevFiles);
        $this->files = $this->prevFiles;
    }

    public function deleteFile($index) {
        unset($this->files[$index]);
        $this->prevFiles = $this->files;
    }

    public function deleteGallery($id) {
        $gallery = Gallery::findOrFail($id);
        if(Storage::exists('public/galeria/'.$gallery->filepath)) {
            Storage::delete('public/galeria/'.$gallery->filepath);
        }
        $gallery->delete();

        $this->emit('refreshGallery');
    }


    public function save()
    {
        foreach ($this->files as $image) {
            $originalFileName = $image->getClientOriginalName();
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $currentFile = $filename.time().'.'.$extension;
            if(!empty($image)) {
                try {
                    $storedImagePath = $image->storeAs('public/galeria/', $currentFile);
                    
                } catch (\Exception $e) {
                    Log::error($e->getMessage());
                }
            }
            Gallery::create([
                'filepath' => $currentFile,
            ]);
        }

        $this->files = [];
        $this->emit('refreshGallery');
    }

    public function render()
    {
        return view('livewire.gallery-form');
    }
}
