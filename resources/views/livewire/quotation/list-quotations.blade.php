<table class="w-full text-sm text-left border border border-black">
    <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-black">
        <tr>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                Nº
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                EMPRESA
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                RUC
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                ESTADO
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                MONTO
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                ACCIONES
                <span class="sr-only">ACCIONES</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($quotations as $quotation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row"
                    class="px-6 py-4 text-gray-900 dark:text-white whitespace-nowrap border border-black">
                    {{ $quotation->id }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->company->name }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->company->ruc }}
                </td>
                <td class="py-4 h-full border border-black">
                    <div class="form-check grid align-center justify-center content-center">
                        <input type="checkbox"
                            class="form-checkbox bg-red-600 checked:text-green-600 checked:bg-green-600"
                            onclick="Livewire.emit('openModal', 'quotation.update-status', {{ json_encode(['quotation' => $quotation->id]) }}); return false;"
                            {{ $quotation->status ? 'checked' : '' }}
                        >
                    </div>
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->total }}
                </td>
                <td class="px-6 py-4 border border-black">
                    <div class=" grid grid-cols-2 gap-4 align-center justify-center text-center">
                        <a href="{{ route('quotations.edit', $quotation->id) }}"
                            class="text-white dark:text-blue-500 bg-blue-700 px-2 py-1 border border border-blue-900">Editar</a>
                        <a href="#"
                            class="text-white dark:text-blue-500 bg-red-700 px-2 py-1 border border border-red-900">Ver</a>
                    </div>
                </td>
            </tr>
        @empty
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row"
                    class="px-6 py-4 text-gray-900 dark:text-white whitespace-nowrap border border-black">
                </td>
                <td class="px-6 py-4 border border-black">

                </td>
                <td class="px-6 py-4 border border-black">

                </td>
                <td class="px-6 py-4 border border-black">

                </td>
                <td class="px-6 py-4 border border-black">

                </td>
                <td class="px-6 py-4 text-right border border-black">
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
