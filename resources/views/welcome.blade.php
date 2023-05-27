<x-guest-layout>
    <div class="container mx-auto">
        <div class="w-full flex justify-center py-10">
            <div class="w-full mx-12 rounded-lg bg-[#6D8176]">
                <div class="grid grid-cols-3">
                    <div class="col-span-2 p-4">
                        <h2 class="text-2xl text-white pb-2 font-bold">Bemutatkozás</h2>
                        <p class="text-white text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a augue
                            in augue elementum rutrum in in eros. Vestibulum ac scelerisque ligula. Vestibulum aliquet
                            erat sit amet nunc rhoncus vehicula. Vestibulum ut ante sed leo aliquet posuere ut sed
                            felis. Vestibulum lobortis justo id enim aliquet, at gravida sem ornare. Maecenas sit amet
                            tempus justo, ut euismod enim. Sed eu tristique orci. Vestibulum id massa eu magna volutpat
                            pulvinar. Vestibulum tempor maximus diam pulvinar ultricies. Praesent tincidunt enim est,
                            sed ultrices augue sollicitudin ut. Donec sit amet ex metus. Sed aliquam imperdiet lorem in
                            volutpat. Proin a erat mollis ligula laoreet rutrum congue a augue. Sed orci augue,
                            pellentesque id malesuada lobortis, suscipit eget ante. Ut lobortis orci elit, et sodales
                            felis consequat sed. Nam nulla orci, tristique sit amet cursus nec, aliquam eget risus.
                        </p>
                    </div>
                    <div class="rounded-r-lg">
                        <img class="rounded-l-lg transform -scale-x-100" src="{{URL::asset('images/2023-05-21.jpg')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <h2 class="text-center text-2xl">A Farm lakói</h2>
        <div class="grid grid-cols-4 gap-1">
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
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
</x-guest-layout>
