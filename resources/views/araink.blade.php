<x-guest-layout>
    <div class="container mx-auto py-10">

        <h2 class="text-center text-3xl mb-6">Árlista</h2>

        <div class="w-full flex justify-center text-lg">
            <div class="w-fit darker-background p-2 rounded-xl">
                <table class="table-auto bg-white rounded-xl">
                    <tbody>
                        @foreach ($prices as $price)
                            <tr>
                                <td class="border-b border-slate-200 py-2 px-4">{{ $price->name }}</td>
                                <td class="border-b border-slate-200 py-2 px-4">{{ $price->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</x-guest-layout>
