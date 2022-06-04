<x-app-layout>
    <x-slot name="header">COTIZACIONES</x-slot>
    <x-slot name="styles">
    </x-slot>

    <div class="m-10 bg-white">
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row"
                        class="px-6 py-4 text-gray-900 dark:text-white whitespace-nowrap border border-black">
                        02
                    </td>
                    <td class="px-6 py-4 border border-black">
                        GALVEC PERU SAC
                    </td>
                    <td class="px-6 py-4 border border-black">
                        201214
                    </td>
                    <td class="py-4 h-full grid align-center justify-center content-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-checkbox bg-red-600 checked:text-green-600 checked:bg-green-600">
                        </div>
                    </td>
                    <td class="px-6 py-4 border border-black">
                        S/2000
                    </td>
                    <td class="px-6 py-4 border border-black">
                        <div class=" grid grid-cols-2 gap-4 align-center justify-center text-center">
                            <a href="#"
                                class="text-white dark:text-blue-500 bg-blue-700 px-2 py-1 border border border-blue-900">Editar</a>
                            <a href="#"
                                class="text-white dark:text-blue-500 bg-red-700 px-2 py-1 border border border-red-900">Eliminar</a>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row"
                        class="px-6 py-4 text-gray-900 dark:text-white whitespace-nowrap border border-black">
                        01
                    </td>
                    <td class="px-6 py-4 border border-black">
                        GALVEC PERU SAC
                    </td>
                    <td class="px-6 py-4 border border-black">
                        201214
                    </td>
                    <td class="py-4 h-full border border-black">
                        <div class="form-check grid align-center justify-center">
                            <input type="checkbox" class="form-checkbox bg-red-600 checked:text-green-600 checked:bg-green-600">
                        </div>
                    </td>
                    <td class="px-6 py-4 border border-black">
                        S/2000
                    </td>
                    <td class="px-6 py-4 border border-black">
                        <div class=" grid grid-cols-2 gap-4 align-center justify-center text-center">
                            <a href="#"
                                class="text-white dark:text-blue-500 bg-blue-700 px-2 py-1 border border border-blue-900">Editar</a>
                            <a href="#"
                                class="text-white dark:text-blue-500 bg-red-700 px-2 py-1 border border border-red-900">Eliminar</a>
                        </div>
                    </td>
                </tr>
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
            </tbody>
        </table>
    </div>
</x-app-layout>
