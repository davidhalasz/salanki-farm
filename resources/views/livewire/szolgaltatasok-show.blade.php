<div class="p-6 mx-auto">
    <table class="table border-collapse p-6 mx-auto">
        <tr class="p-6">
            <th class="text-left py-2 px-6">SZOLGALTATASOK</th>
            <th class="text-center py-2 px-6"></th>
        </tr>
        @foreach ($services as $service)
            <tr>
                <td class="py-2 px-6">{{ $service->name }}</td>
                <td class="py-2 px-6">{{ $service->description }}</td>
                <td class="py-2 px-6 text-center">
                    <button wire:click="deleteService({{ $service->id }})"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded-full">Törlés</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
