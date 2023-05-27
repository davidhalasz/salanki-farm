@php
    $routeName = Route::currentRouteName();
@endphp
<nav>
    <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4 gap-4 text-xl text-white">
        <a href="#" class="flex items-center">
            LOGO
        </a>
        <div class="flex gap-4">
            <a href="/">
                <button
                    class="px-4 py-2 rounded-sm {{ $routeName == 'guest.index' ? 'bg-[#EECF9C] text-[#693A4E]' : '' }}">
                    Kezdőlap
                </button>
            </a>
            <a href="/farm-lakoi">
                <button
                    class="px-4 py-2 rounded-sm {{ $routeName == 'guest.farm-lakoi' ? 'bg-[#EECF9C] text-[#693A4E]' : '' }}">
                    Farm lakói
                </button>
            </a>
            <a href="/szolgaltatasok">
                <button
                    class="px-4 py-2 rounded-sm {{ $routeName == 'guest.szolgaltatasok' ? 'bg-[#EECF9C] text-[#693A4E]' : '' }}">
                    Szolgáltatások
                </button>
            </a>
            <a href="/araink">
                <button
                    class="px-4 py-2 rounded-sm {{ $routeName == 'guest.araink' ? 'bg-[#EECF9C] text-[#693A4E]' : '' }}">
                    Áraink
                </button>
            </a>
            <a href="/kapcsolat">
            <button
                class="px-4 py-2 rounded-sm {{ $routeName == 'guest.kapcsolat' ? 'bg-[#EECF9C] text-[#693A4E]' : '' }}">
                Kapcsolat
            </button>
            </a>
        </div>

    </div>
</nav>
