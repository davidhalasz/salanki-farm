<x-guest-layout>
    <div class="container mx-auto py-10">
        <h2 class="text-center text-3xl mb-6">Galéria</h2>
        <div class="flex flex-wrap gap-1">
            @foreach ($galleries as $galery)
                <img src="{{ URL::asset('storage/galeria/' . $galery->filepath) }}" class="h-52 w-52 object-cover rounded-xl"/>
            @endforeach
        </div>
    </div>
</x-guest-layout>