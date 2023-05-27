<x-guest-layout>
    <div class="container mx-auto py-10">
        <h1 class="text-2xl text-center">SZOLGÁLTATÁSOK</h1>
        <div class="grid grid-cols-2 gap-4 text-white py-8">
            @foreach ($services as $service)
                <div class="flex-col w-full h-60 rounded-md bg-[#6D8176] text-white flex justify-center items-center bg-cover bg-center {{ $service->filepath ? '' : 'bg-[#6D8176]' }}"
                    style="background-image: url('{{ $service->filepath ? '/storage/szolgaltatasok/'.$service->filepath : '' }}')">
                    <div class="text-center mb-2">
                        <h2 class="text-2xl font-bold rounded-sm {{ $service->name ? 'backdrop-blur-sm bg-black/50 px-2' : '' }}">
                            {{ $service->name }}</h2>
                    </div>
                    <div class="text-center">
                        <p class="text-lg rounded-sm {{ $service->description ? 'backdrop-blur-sm bg-black/50 px-2' : '' }}">
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
