<x-guest-layout>
    <div class="container mx-auto py-10">
        <h2 class="text-center text-3xl mb-6">Szolgáltatások</h2>
        <div class="text-white">
            @foreach ($services as $service)
                <div x-data="{ isOpen: false }">
                    <div class="max-w-4xl mx-auto darker-background text-white p-6 rounded-2xl mb-4">
                        <div class="flex justify-between">
                            <h2 class="text-2xl">
                                {{ $service->name }}
                            </h2>
                            @if ($service->description)
                                <span class="open-toggle" id="toggle-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen" @click="isOpen = true"
                                        class="h-9 w-9 rounded-full border-2 border-white p-1 open-content-i"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" x-show="isOpen" @click="isOpen = false"
                                        class="h-9 w-9 rounded-full border-2 border-white p-1 close-content-i hide"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            @endif
                        </div>
                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-300 origin-top"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition origin-top ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90" class="wrapper">
                            <div class="open-content divide-y divide-gray-400 space-y-2" id="reveal-content">
                                <div class="szabadido-divider"></div>
                                <div class="py-4">
                                    <p>{{ $service->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script></script>
    </div>


</x-guest-layout>
