<x-guest-layout>
    <div class="container mx-auto py-10">
        <h1 class="text-2xl text-center">KAPCSOLAT</h1>

        <div class="w-full flex justify-center py-10">
            <div class="w-full mx-12 rounded-lg">
                <div class="grid grid-cols-3">
                    <div class="col-span-2">
                        <iframe class="w-full h-full rounded-l-md"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.3833631002935!2d21.7998841805426!3d47.52775493725829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47470a447b393fd7%3A0xec4de641f95d300b!2zU2Fsw6Fua2kgRmFybSBIYWzDoXA!5e0!3m2!1shu!2shu!4v1684941522334!5m2!1shu!2shu"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="rounded-r-lg bg-[#6D8176] text-white p-4">
                        <h2 class="text-xl font-bold">Cím</h2>
                        <p class="px-4">
                            Debrecen</br>
                            Haláp tanya 342</br>
                            4078</br>
                            Magyarország
                        </p>
                        <h2 class="text-xl font-bold mt-4">Telefon</h2>
                        <p class="px-4">
                            06 30 126 8502
                        </p>
                        <h2 class="text-xl font-bold mt-4">Nyitvatartás</h2>
                        <table class="table-auto">
                            <tbody>
                                @foreach ($openings as $opening)
                                <tr>
                                    <td class="px-4">{{$opening->day}}</td>
                                    <td class="px-4">{{$opening->closed 
                                        ? "Zárva" 
                                        : \Carbon\Carbon::parse($opening->start)->format('H:i') . ' - ' . \Carbon\Carbon::parse($opening->end)->format('H:i') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @foreach ($informations as $information)
                        <p class="pt-4">
                            {{$information->description}}
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
