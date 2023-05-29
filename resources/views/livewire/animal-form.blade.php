<div>
    <h1 class="text-center text-2xl font-bold">Farm lakói</h1>
    <div class="flex flex-row flex-wrap">
        @foreach ($animals as $animal)
            <div class="flex-rows-2 gap-2 mb-4 w-fit h-fit m-4">
                <div class="mb-2 flex justify-center">
                    <img class="h-32 w-32 rounded-xl object-cover"
                        src={{ url('storage/farm-lakoi/' . $animal->filepath) }} />
                </div>
                <div class="mb-2 text-center">
                    <p class="text-lg font-bold">{{ $animal->name }}</p>
                </div>
                <div class="text-center">
                    <button type="button" wire:click.prevent="deleteAnimal({{$animal->id}})"
                        class="px-4 text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Törlés</button>
                </div>
            </div>
        @endforeach

        <form wire:submit.prevent="submit">
            @csrf
            <div class="flex-rows-3 gap-2 mb-4 w-fit h-fit m-4">
                <div class="mb-2 flex justify-center">
                    <div class="h-32 w-32 border border-1 border-black relative rounded-xl bg-transparent bg-cover bg-center"
                        style="background-image: url('{{ $filepath ? $filepath->temporaryUrl() : '' }}')">
                        <div class="absolute inset-0 flex items-center justify-center {{ $filepath ? 'hidden' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                        <input type="file" name="filename" accept="image/*"
                            class="absolute inset-0 w-full h-full cursor-pointer opacity-0" id="chooseFile"
                            wire:model="filepath">
                    </div>
                    @error('filepath')
                        <br /><span class="text-red-800 error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2 text-center">
                    <input type="text" name="name" class="rounded-xl" id="name" wire:model="name"
                        placeholder="Állat neve">
                    @error('name')
                        <br /><span class="text-red-800 error">{{ $message }}</span>
                    @enderror

                </div>
                <div class="text-center">
                    <button type="submit"
                        class="px-4 text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Feltöltés</button>
                </div>
            </div>
        </form>
    </div>
</div>
