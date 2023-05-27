<div class="relative">
    <form wire:submit.prevent="submit">
        <div class="form-group grow mb-6 w-full">
            <div class="">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Szolgáltatásnév
                </label>
            </div>
            <div class="grow pr-4">
                <input type="text" id="name" wire:model="name"
                    class="bg-gray-50 border border-gray-300 text-black 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group grow mb-6 w-full">
            <div class="">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Leírás (Nem kötelező)
                </label>
            </div>
            <div class="grow pr-4">
                <textarea rows="3" id="description" wire:model="description"
                    class="bg-gray-50 border border-gray-300 text-black 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group grow mb-6 w-full">
            <label class="custom-file-label" for="chooseFile">
                <input type="file" name="filename" class="custom-file-input" id="chooseFile" wire:model="filepath">
                @error('filepath')
                    <br /><span class="text-red-800 error">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <h1 class="text-center font-bold mb-2">ELŐNÉZET</h1>
        <div class="w-full flex justify-center">
            <div class="flex-col w-1/2 h-60 rounded-md bg-[#6D8176] text-white flex justify-center items-center bg-cover bg-center {{ $filepath ? '' : 'bg-[#6D8176]' }}" style="background-image: url('{{ $filepath ? $filepath->temporaryUrl() : '' }}')">
                <div class="text-center mb-2">
                    <h2 class="text-2xl font-bold {{$name ? 'backdrop-blur-sm bg-white/30 px-2' : '' }}">{{ $name }}</h2>
                </div>
                <div class="text-center">
                    <p class="text-lg {{$description ? 'backdrop-blur-sm bg-white/30 px-2' : '' }}">{{ $description }}</p>
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit"
                class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hozzáadás</button>
        </div>
    </form>

    <div x-data="{ showSnackbar: @entangle('showSnackbar').defer }" x-init="() => { $watch('showSnackbar', value => { if (value) setTimeout(() => { showSnackbar = false; }, 5000) }) }" x-show.transition.duration.500ms="showSnackbar"
        style="background-color: #333; color: #fff; position: fixed; bottom: 10px; right: 10px; padding: 10px; border-radius: 5px;">
        Szolgáltatás hozzáadva!
    </div>

</div>
