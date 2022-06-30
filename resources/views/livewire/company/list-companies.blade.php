<table class="w-full text-sm text-left border border border-black" id="companiesTable">
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
                DIRECCIÓN FISCAL
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                ACCIONES
                <span class="sr-only">ACCIONES</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($companies as $company)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row"
                    class="px-6 py-4 text-gray-900 dark:text-white whitespace-nowrap border border-black">
                    {{ $company->id }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $company->name }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $company->ruc }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $company->address }}
                </td>
                <td class="px-6 py-4 border border-black">
                    <div class=" grid grid-cols-2 gap-4 align-center justify-center text-center">
                        <a href="#"
                            class="text-white dark:text-blue-500 bg-blue-700 px-2 py-1 border border border-blue-900"
                            data-id="{{ $company->id }}"
                            onclick="Livewire.emit('openModal', 'company.edit', {{ json_encode(['company' => $company->id]) }})"
                            >Ver / Editar</a>
                        <a href="#"
                            class="text-white dark:text-blue-500 bg-red-700 px-2 py-1 border border border-red-900"
                            onclick="Livewire.emit('openModal', 'company.delete', {{ json_encode(['company' => $company->id]) }})"
                            >Eliminar</a>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
