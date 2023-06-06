<x-welcome-layout>
    <div class="relative pb-36 md:pb-24 lg:pb-10 xl:pb-0">
        <div class="background"></div>
        <div class="w-full bg-transparent">
            <div class="container mx-auto py-4">
                @include('components.custom_components.navbar')
            </div>
        </div>
        <div class="container mx-auto">
            <div class="w-full flex justify-center lg:py-10">
                <div class="w-full rounded-lg bg-transparent">
                    <div class="grid grid-cols-3">
                        <div class="col-span-3 md:col-span-2 p-4">
                            <h2 class="text-4xl md:text-5xl lg:text-6xl text-white md:pb-2 font-bold">Salánki Farm Haláp</h2>
                            <p class="text-white text-lg mt-4 text-justify md:pr-4">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Maecenas a
                                augue
                                in augue elementum rutrum in in eros. Vestibulum ac scelerisque ligula. Vestibulum
                                aliquet
                                erat sit amet nunc rhoncus vehicula. Vestibulum ut ante sed leo aliquet posuere ut sed
                                felis. Vestibulum lobortis justo id enim aliquet, at gravida sem ornare. Maecenas sit
                                amet
                                tempus justo, ut euismod enim. Sed eu tristique orci. Vestibulum id massa eu magna
                                volutpat
                                pulvinar. Vestibulum tempor maximus diam pulvinar ultricies. Praesent tincidunt enim
                                est,
                                sed ultrices augue sollicitudin ut. Donec sit amet ex metus. Sed aliquam imperdiet lorem
                                in
                                volutpat. Proin a erat mollis ligula laoreet rutrum congue a augue. Sed orci augue.
                            </p>
                        </div>
                        <div class="hidden items-center justify-center w-full h-full">
                            <div class="rounded-full circle-background w-full dynamic-height"></div>
                        </div>
                        <div class="hidden md:flex items-center justify-center w-full h-full">
                            <div class="w-full dynamic-height">
                                <img class="lg:w-5/6" src="{{url('/images/bolygoz5.png')}}" alt="Image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto pb-10 mb-10">
        <h2 class="text-center text-3xl mb-6">A Farm lakói</h2>
        <div class="w-full flex justify-center">
            <div class="w-fit">
                <div class="flex justify-center">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-4">
                        @foreach ($animals as $animal)
                            <div class="w-[200px] dynamic-height mb-8">
                                <img class="w-full h-full object-cover rounded-full"
                                    src="{{ URL::asset('storage/' . $animal->filepath) }}" />
                                <p class="text-center font-bold text-lg">{{ $animal->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setDynamicHeight() {
            const dynamicDivs = document.querySelectorAll('.dynamic-height');
            dynamicDivs.forEach((div) => {
                const width = div.offsetWidth;
                div.style.height = `${width}px`;
            });
        }

        setDynamicHeight();
        window.addEventListener('resize', setDynamicHeight);
    </script>
</x-welcome-layout>
