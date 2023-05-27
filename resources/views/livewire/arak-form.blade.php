<div class="relative">
    <form wire:submit.prevent="submit" class="flex">
        <div class="form-group grow md:flex md:items-center mb-6 w-3/4">
            <div class="">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Név
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
        <div class="form-group grow md:flex md:items-center mb-6 w-1/4">
            <div class="">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Ár
                </label>
            </div>
            <div class="grow pr-4">
                <input type="text" id="price" wire:model="price"
                    class="bg-gray-50 border border-gray-300 text-black 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('price')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="">
            <button type="submit"
                class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hozzáadás</button>
        </div>
    </form>

    <div x-data="{ showSnackbar: @entangle('showSnackbar').defer }"
         x-init="() => { $watch('showSnackbar', value => { if (value) setTimeout(() => { showSnackbar = false; }, 5000) }) }"
         x-show.transition.duration.500ms="showSnackbar"
         style="background-color: #333; color: #fff; position: fixed; bottom: 10px; right: 10px; padding: 10px; border-radius: 5px;">
        Szolgáltatás Sikeresen hozzáadva!
    </div>
</div>