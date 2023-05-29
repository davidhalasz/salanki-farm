<div>
    <h2 class="text-xl font-bold text-center p-5">Galéria szerkesztése</h2>
    <div class="flex justify-center items-center" x-data="drop_file_component()">
        <div class="relative py-6 w-96 rounded border-dashed border-2 flex flex-col justify-center items-center"
            x-bind:class="dropingFile ? 'bg-gray-400 border-gray-500' : 'border-gray-500 bg-gray-200'"
            x-on:drop="dropingFile = false" x-on:drop.prevent="handleFileDrop($event)"
            x-on:dragover.prevent="dropingFile = true" x-on:dragleave.prevent="dropingFile = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            </svg>
            <div class="text-center" wire:loading.remove wire.target="files">Húzd ide a képeket vagy klikkelj ide</div>
            <div class="mt-1" wire:loading.flex wire.target="files">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <div>Processing Files</div>
            </div>
            <input type="file" id="fileInput" class="absolute w-full h-full opacity-0 cursor-pointer" multiple
                x-on:change="handleFileInputChange($event)" />
        </div>
    </div>

    <div class="flex flex-wrap mt-5">
        @foreach ($files as $index => $file)
            <div class="relative mb-4 w-fit h-fit m-2">
                <div class="h-32 w-32 border border-1 border-black relative rounded-xl bg-transparent bg-cover bg-center"
                    style="background-image: url('{{ $file->temporaryUrl() }}')">

                    <div class="absolute top-[-10px] right-[-10px]">
                        <button wire:click="deleteFile({{ $index }})"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="w-full text-center">
        @if (count($files) > 0)
            <button wire:click="save()" class="py-2 px-4 rounded-lg text-white bg-blue-600">Feltöltés</button>
        @endif
    </div>

    <div class="w-full border-t border-1 border-gray-400">
        <h2 class="text-xl font-bold text-center p-5">Feltöltött képek</h2>
        <div class="flex flex-row flex-wrap">
            @foreach ($galleries as $gallery)
                <div class="flex-rows-2 gap-2 mb-4 w-fit h-fit m-4">
                    <div class="mb-2 flex justify-center">
                        <img class="h-32 w-32 rounded-xl object-cover"
                            src={{ url('storage/galeria/' . $gallery->filepath) }} />
                    </div>
                    <div class="text-center">
                        <button type="button" wire:click.prevent="deleteGallery({{ $gallery->id }})"
                            class="px-4 text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Törlés</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function drop_file_component() {
            return {
                dropingFile: false,
                handleFileDrop(e) {
                    if (event.dataTransfer.files.length > 0) {
                        const files = e.dataTransfer.files;

                        @this.uploadMultiple('files', files, (uploadedFilename) => {}, () => {}, (event) => {});
                    }
                },
                handleFileInputChange(e) {
                    if (e.target.files.length > 0) {
                        const files = e.target.files;

                        @this.uploadMultiple('files', files, (uploadedFilename) => {}, () => {}, (event) => {});
                    }
                }
            };
        }
    </script>
</div>
