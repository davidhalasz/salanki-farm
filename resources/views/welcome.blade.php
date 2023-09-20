<x-welcome-layout>
    <div class="relative lg:pb-24 xl:pb-0">
        <div class="w-full bg-[#2174fa]">
            <div class="container mx-auto text-white">
                @include('components.custom_components.navbar')
            </div>
        </div>

        <div class="relative w-full aspect-[4/3] lg:aspect-[9/4] div-height" id="div-height">
            <div class="absolute w-full h-full grid grid-cols-3">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/7-min.jpg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/2-min.jpg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/3-min.jpg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/1-min.jpg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/5-min.jpg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/6-min.jpg') }}">
                <img class="dynamic-height w-full object-cover object-top" src="{{ asset('covers/4-min.jpg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/8-min.jpeg') }}">
                <img class="dynamic-height w-full object-cover" src="{{ asset('covers/9-min.jpg') }}">
            </div>
            <div class="absolute z-5 backdrop-opacity-40 bg-black/60 h-full w-full flex justify-center items-center">
                <div class="elementor-shape elementor-shape-top" style="fill: #2174fa">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
                        <path class="elementor-shape-fill"
                            d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
                        </path>
                        <path class="elementor-shape-fill"
                            d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
                        </path>
                    </svg>
                </div>
                <div class="text-[30px] md:text-[50px] lg:text-[70px] flex flex-row flex-wrap justify-center gap-3 lg:gap-8">
                    <span class="bg-clip-text text-transparent bg-white to-violet-500" style="font-family: Monoton;">
                        SALÁNKI
                    </span>
                    <span class="bg-clip-text text-transparent bg-white to-violet-500" style="font-family: Monoton;">
                        FARM
                    </span>
                    <span class="bg-clip-text text-transparent bg-white to-violet-500" style="font-family: Monoton;">
                        HALÁP
                    </span>
                </div>
            </div>
        </div>

        <div class="container mx-auto text-left py-12 px-4">
            <h1 class="text-2xl lg:text-4xl text-[#2174fa] py-4 caveatFont text-center">Gyerek Quadozás, Ugrálóvár,
                Állatsimogató</h1>
            <h1 class="text-2xl lg:text-4xl  py-4 text-center">Üdvözöljük a Salánki Farm honlapján!</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 mt-8 gap-12">
                <div>
                    <h2 class="text-lg lg:text-xl">
                        Gyertek és töltsétek el nálunk a szabadidőtöket, töltődjetek fel a két hektáros területünkön az erdő árnyékában.
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 mb-2">
                        Nem csak a képeken látható állatok várnak benneteket sok szeretettel, hanem Mi is az alábbi szolgáltatásokkal:
                    </p>
                    <ul class="list-inside list-disc text-lg">
                        <li>Állatsimogató</li>
                        <li>Ugrálóvár</li>
                        <li>Gyerek quadozás</li>
                        <li>Elektromos kisautó</li>
                        <li>Lovas szekrezés</li>
                        <li>Játszótér</li>
                    </ul>
                </div>
                <img class="w-full h-full object-cover" src="{{ asset('images/nyito.jpg') }}">
            </div>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 md:gap-4 mt-8">
                <div class="flip aspect-[4/3] w-full">
                    <div class="aspect-[4/3] w-full front"
                        style="background-image: url({{ asset('szolgaltatasok_h/etetes.jpg') }})">
                    </div>
                    <div class="back">
                        <div class="h-full w-full flex justify-center items-center">
                            <h2 class="text-center text-lg md:text-xl">Állatsimogatás és etetés</h2>
                        </div>
                    </div>
                </div>
                <div class="flip aspect-[4/3] w-full">
                    <div class="aspect-[4/3] w-full front"
                        style="background-image: url({{ asset('szolgaltatasok_h/lovasszekerezes.jpeg') }})">
                    </div>
                    <div class="back">
                        <div class="h-full w-full flex justify-center items-center">
                            <h2 class="text-center text-lg md:text-xl">Lovasszekerezés</h2>
                        </div>
                    </div>
                </div>
                <div class="flip aspect-[4/3] w-full">
                    <div class="aspect-[4/3] w-full front"
                        style="background-image: url({{ asset('szolgaltatasok_h/ugralovar.jpeg') }})">
                    </div>
                    <div class="back">
                        <div class="h-full w-full flex justify-center items-center">
                            <h2 class="text-center text-lg md:text-xl">Ugrálóvár</h2>
                        </div>
                    </div>
                </div>
                <div class="flip aspect-[4/3] w-full">
                    <div class="aspect-[4/3] w-full front"
                        style="background-image: url({{ asset('szolgaltatasok_h/quadozas.jpg') }})">
                    </div>
                    <div class="back">
                        <div class="h-full w-full flex justify-center items-center">
                            <h2 class="text-center text-lg md:text-xl">Quadozás</h2>
                        </div>
                    </div>
                </div>
                <div class="flip aspect-[4/3] w-full">
                    <div class="aspect-[4/3] w-full front"
                        style="background-image: url({{ asset('szolgaltatasok_h/egyeb.jpg') }})">
                    </div>
                    <div class="back">
                        <div class="h-full w-full flex flex-col justify-center items-center gap-2">
                            <h2 class="text-center text-lg md:text-xl">És még sok minden más...</h2>
                            <a class="px-4 py-2 bg-[#2174fa] text-white rounded-lg" href="/szolgaltatasok">Megnézem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax min-h-[300px] md:min-h-[400px]" style="background-image: url({{ asset('images/threeanimal.jpg') }})"></div>

        <div class="container mx-auto px-2 lg:px-0">
            <div class="md:py-12 grid grid-cols-1 lg:grid-cols-2 lg:gap-12 px-2">
                <div class="lg:py-4">
                    <h2 class="text-2xl lg:text-4xl text-[#2174fa] py-4 caveatFont">Milyen nálunk egy nap?</h2>
                    <h2 class="text-xl lg:text-4xl py-4">
                        Csütörtöktől - Vasárnapig 10 - 18 óráig vár mindenkit a <span class="text-[#2174fa]">Salánki
                            Farm
                            Haláp</span>
                    </h2>
                    <p class="text-gray-600 py-2 lg:text-lg">
                        Csütörtök és Pénteken: Ingyenes ugrálóvár <br>
                        Szombaton és Vaszárnap: Ingyenes limonádé a gyerekeknek
                    </p>
                    <p class="text-gray-600 py-2 lg:text-lg">
                        Gyere etesd meg Szultánt a teve csikónkat, Csokit, és Barnust az alpaka párt! A szeretetre
                        vágyó nyuszi csapatot, a Holland Törpekecske kismamákat, Fülest és Szamarat. Majd amikor
                        elfáradtál az ugrálóvárban, quadozz egyet apával, vagy anyával közösen. Majd végül egy jó
                        Hortobágyi slambuccal, paprikás krumplival, vagy egy jó bográcsos töltött káposztával tele
                        pocival mehetsz az erdő hűsében lovasszekerezni, hogy jól elfáradva zárd a napot! (Főzés,
                        szekerezés, egyelőre csak hétvégén.)
                        Várunk mindenkit nagy nagy szeretettel.
                        <br><br>
                        <span class="text-[#2174fa] font-bold"> </span>
                    </p>
                </div>

                <div class="order-last lg:order-first relative w-full h-[350px] lg:h-[250px] lg:h-full">
                    <div class="light-shape absolute"></div>
                    <div class="yellow-shape absolute mini-image-mask"></div>
                    <div class="absolute teve-image image-mask image-background h-[400px] w-[630px]"></div>
                    <div class="absolute grass-shape z-5"></div>
                </div>
            </div>
        </div>
        <div
            class="fourSection container mx-auto text-left md:pt-12 pb-24">
            <h1 class="text-2xl lg:text-4xl text-[#2174fa] py-4 caveatFont text-center">A farm lakói</h1>
            <h1 class="text-2xl lg:text-4xl py-4 text-center mb-12">Találkozz velük a farmunkon!
            </h1>
            <div class="grid grid-cols-3  lg:grid-cols-4 lg:grid-cols-6 gap-8">
                @foreach ($animals as $animal)
                    <div class="text-center">
                        <div class="animal h-[100px] lg:h-[200px] w-full"
                            style="background-image: url('{{ URL::asset('/storage/' . $animal->filepath) }}')"></div>
                        <p class="text-lg lg:text-xl font-bold mt-2">{{ $animal->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="elementor-shape elementor-shape-bottom" style="fill: #313131">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
                <path class="elementor-shape-fill"
                    d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
                </path>
                <path class="elementor-shape-fill"
                    d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
                </path>
                <path class="elementor-shape-fill"
                    d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
                </path>
                <path class="elementor-shape-fill"
                    d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
                </path>
                <path class="elementor-shape-fill"
                    d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
                </path>
                <path class="elementor-shape-fill"
                    d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
                </path>
                <path class="elementor-shape-fill"
                    d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
                </path>
                <path class="elementor-shape-fill"
                    d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
                </path>
                <path class="elementor-shape-fill"
                    d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
                </path>
            </svg>
        </div>
    </div>
    <script>
        function setDynamicHeight() {
            const dynamicDivs = document.querySelectorAll('.dynamic-height');
            const divElement = document.getElementById("div-height");
            const elemHeight = divElement.offsetHeight;

            dynamicDivs.forEach((div) => {
                const height = elemHeight / 3;
                div.style.height = `${height}px`;
            });
        }

        setDynamicHeight();

        window.addEventListener('resize', setDynamicHeight);
    </script>
</x-welcome-layout>
