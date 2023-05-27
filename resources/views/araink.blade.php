<x-guest-layout>
    <div class="container mx-auto py-10">

        <h1 class="text-2xl text-center">ÁRLISTA</h1>

        <div class="w-full flex justify-center py-8 text-lg">
            <table class="table-auto">
                <tbody>
                    @foreach ($prices as $price)
                        <tr>
                            <td class="py-2 px-4">{{ $price->name }}</td>
                            <td class="py-2 px-4">{{ $price->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-guest-layout>
