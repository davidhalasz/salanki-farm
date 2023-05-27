<div class="w-full h-full">
    <form wire:submit.prevent="submit" class="flex">
        <div class="w-full h-full">
            <div class="w-full flex divide-x space-x-4">
                <div>
                    <h2 class="font-bold text-center text-lg pb-4">Nyitvatartás szerkesztése</h2>
                    <table class="table-auto w-[450px]">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nyitás</th>
                                <th>Zárás</th>
                                <th>Zárva van</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($openings as $index => $opening)
                                <tr>
                                    <td class="p-2 font-bold">{{ $opening->day }}</td>
                                    <td class="p-2">
                                        <input
                                            class="{{ $openings[$loop->index]->closed == true ? 'bg-gray-300' : '' }} rounded-md"
                                            type="time" id="start{{ $index }}"
                                            wire:model="openings.{{ $loop->index }}.start" min="00:00"
                                            max="23:59"
                                            {{ $openings[$loop->index]->closed == true ? 'disabled' : '' }}>
                                    </td>
                                    <td class="p-2">
                                        <input
                                            class="{{ $openings[$loop->index]->closed == true ? 'bg-gray-300' : '' }} rounded-md"
                                            type="time" id="end{{ $index }}"
                                            wire:model="openings.{{ $loop->index }}.end"
                                            min="{{ strval($openings[$loop->index]->start) }}" max="23:59"
                                            {{ $openings[$loop->index]->closed == true ? 'disabled' : '' }}>
                                    </td>
                                    <td class="p-2 text-center">
                                        <input class="rounded-md w-5 h-5" type="checkbox"
                                            id="closed{{ $index }}"
                                            wire:model="openings.{{ $loop->index }}.closed" value="1"
                                            {{ old('closed') ? 'checked="checked"' : '' }}>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="pl-4 grow h-full">
                    <h2 class="font-bold text-center text-lg pb-4">Egyéb információk hozzáadása</h2>
                    <div>
                        @foreach ($informations as $information)
                            <div class="informationCard relative border border-1-black w-full p-3 mt-1 rounded-md">
                                <p>
                                    {{ $information->description }}
                                </p>
                                <div class="hiddenDeleteBtn absolute top-[-8px] right-[-8px]">
                                    <button wire:click="deleteInformation({{ $information->id }})"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>

                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="w-full mt-4">
                        <textarea rows="3" id="newInformation" wire:model="newInformation"
                            class="bg-gray-50 border border-gray-300 text-black 
                                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                    </div>
                </div>
            </div>
            <div class="pt-4 w-full">
                <button type="submit"
                    class="float-right px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Változtatások
                    mentése</button>
            </div>
        </div>
    </form>
    <div x-data="{ showSnackbar: @entangle('showSnackbar').defer }" x-init="() => { $watch('showSnackbar', value => { if (value) setTimeout(() => { showSnackbar = false; }, 5000) }) }" x-show.transition.duration.500ms="showSnackbar"
        style="background-color: #333; color: #fff; position: fixed; bottom: 10px; right: 10px; padding: 10px; border-radius: 5px;">
        Sikeresen mentve!
    </div>
</div>
