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
                UNIDAD
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                MONTO
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                IGV
            </th>
            <th scope="col" class="px-6 py-3 text-lg border border-black">
                MONTO TOTAL
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
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->transport_unit }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->subtotal }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->igv }}
                </td>
                <td class="px-6 py-4 border border-black">
                    {{ $quotation->total }}
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
MONTO TOTAL: {{ $quotations->sum('total') }}
