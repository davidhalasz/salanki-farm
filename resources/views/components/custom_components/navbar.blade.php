@php
    $routeName = Route::currentRouteName();
@endphp
<nav x-data="{ open: false }">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center pt-2 lg:pb-1 lg:pt-4">
            <a href="/" class="text-white text-xl font-semibold">
                <img class="h-16 w-16 lg:h-20 lg:w-20 rounded-full " src="{{url('/images/logo2.jpg')}}" alt="Image"/>
            </a>

            <!-- Hamburger button -->
            <div class="flex md:hidden">
                <button @click="open = !open" class="text-white hover:text-white focus:outline-none">
                    <svg x-show="!open" class="text-white h-6 w-6" viewBox="0 0 24 24">
                        <path  fill="white" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>

            <!-- Menu -->
            <div class="hidden md:flex md:items-center">
                <a href="/"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.index' ? 'underline underline-offset-8 decoration-double decoration-white text-white' : 'text-white hover:text-white' }}">
                    Kezdőlap
                </a>
                <a href="/kepek"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.kepek' ? 'underline underline-offset-8 decoration-double decoration-white text-white' : 'text-white hover:text-white' }}">
                    Galéria
                </a>
                <a href="/szolgaltatasok"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.szolgaltatasok' ? 'underline underline-offset-8 decoration-double decoration-white text-white' : 'text-white hover:text-white' }}">
                    Szolgáltatások
                </a>
                <a href="/araink"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.araink' ? 'underline underline-offset-8 decoration-double decoration-white text-white' : 'text-white hover:text-white' }}">
                    Áraink
                </a>
                <a href="/kapcsolat"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.kapcsolat' ? 'underline underline-offset-8 decoration-double decoration-white text-white' : 'text-white hover:text-white' }}">
                    Kapcsolat
                </a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="open" class="md:hidden">
            <a href="/" class="block px-4 py-2 rounded-sm text-white">Kezdőlap</a>
            <a href="/kepek" class="block px-4 py-2 rounded-sm text-white">Galéria</a>
            <a href="/szolgaltatasok" class="block px-4 py-2 rounded-sm text-white">Szolgáltatások</a>
            <a href="/araink" class="block px-4 py-2 rounded-sm text-white">Áraink</a>
            <a href="/kapcsolat" class="block px-4 py-2 rounded-sm text-white">Kapcsolat</a>
        </div>
    </div>
</nav>
