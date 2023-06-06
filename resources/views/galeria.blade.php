<x-guest-layout>
    <div class="container mx-auto py-10">
        <h2 class="text-center text-3xl mb-6">Galéria</h2>
        <div class="flex flex-wrap gap-1">
            @foreach ($galleries as $index => $gallery)
                <div x-data="{ open: false, currentIndex: {{ $index }}, countImages: {{ count($galleries) }}, galleries: {{ $galleries->toJson() }}, get imageUrl() { return '{{ URL::asset('storage/galeria/') }}' + '/' + this.galleries[this.currentIndex].filepath; } }">
                    <img :src="'{{ URL::asset('storage/' . $gallery->filepath) }}'"
                        class="h-52 w-52 object-cover rounded-xl cursor-pointer" @click="open = true" />


                    <template x-if="open">
                        <div class="fixed h-screen top-0 left-0 bottom-0 right-0 bg-black/90 backdrop-blur-md flex place-center"
                            @click="event.target.classList.contains('bg-black/90') ? open = false : ''">
                            <button class="absolute text-white z-10 top-10 right-10" type="button"
                                @click="open = false">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    strokeWidth="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="relative w-full h-full pt-8 text-white">
                                <div class="mx-auto w-full h-full flex justify-between">
                                    <div class="flex items-center w-1/12 h-full">
                                        <button class="h-full px-4 cursor-pointer"
                                            @click="currentIndex = currentIndex - 1">
                                            <svg x-show="currentIndex > 0" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                                                stroke="currentColor" class="w-10 h-10 ml-5">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                    d="M15.75 19.5L8.25 12l7.5-7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="w-10/12 max-h-full flex items-center">
                                        <img class="pb-2 m-auto px-2 max-h-full" :src="imageUrl"
                                            alt="current" />
                                    </div>

                                    <div class="flex items-center w-1/12 h-full">
                                        <button class="h-full px-4 cursor-pointer"
                                            @click="currentIndex = currentIndex + 1">
                                            <svg x-show="currentIndex < countImages-1"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                strokeWidth="1.5" stroke="currentColor" class="w-10 h-10 mr-5">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
