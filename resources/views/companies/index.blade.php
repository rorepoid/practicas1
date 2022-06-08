<x-app-layout>
    <x-slot name="header">PROVEEDORES</x-slot>
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
                                    data-bs-toggle="modal" data-bs-target="#companyModal"
                                    data-id="{{ $company->id }}">Ver</a>
                                <a href="#"
                                    class="text-white dark:text-blue-500 bg-red-700 px-2 py-1 border border border-red-900">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="companyModal" tabindex="-1" aria-labelledby="companyModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal-label">
                        EDITAR PROVEEDOR
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <form>
                        <div class="form-group mb-6">
                            <label for="name" class="form-label inline-block mb-2 text-gray-700">Empresa</label>
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                name="name" id="name">
                        </div>
                        <div class="form-group mb-6">
                            <label for="ruc" class="form-label inline-block mb-2 text-gray-700">RUC</label>
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                name="ruc" id="ruc">
                        </div>
                        <div class="form-group mb-6">
                            <label for="address" class="form-label inline-block mb-2 text-gray-700">Domicilio
                                Fiscal</label>
                            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                                bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="address" name="address" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-6">
                            <label for="attention" class="form-label inline-block mb-2 text-gray-700">Antención</label>
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                name="attention" id="attention">
                        </div>
                        {{-- <div class="grid grid-cols-2 gap-4">
                            <div class="form-group mb-6">
                                <label for="paymentMethod" class="form-label inline-block mb-2 text-gray-700">Forma de
                                    pago</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition
                                ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example"
                                    name="paymentMethod" id="paymentMethod">
                                    <option disabled>Seleccionar moneda</option>
                                    <option value="invoice">Factura</option>
                                    <option value="check">Cheque</option>
                                    <option value="dollar">Al contado</option>
                                </select>
                            </div>
                            <div class="form-group mb-6">
                                <label for="paymentDays" class="form-label inline-block mb-2 text-gray-700">Días</label>
                                <input type="number"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                                bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    name="paymentDays" id="paymentDays">
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="currency" class="form-label inline-block mb-2 text-gray-700">Moneda</label>
                            <select
                                class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition
                                ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Default select example" name="currency" id="currency">
                                <option disabled>Seleccionar moneda</option>
                                <option value="sol">Soles</option>
                                <option value="dollar">Dólares</option>
                            </select>
                        </div>
                        <div class="form-group mb-6">
                            <label for="availability" class="form-label inline-block mb-2 text-gray-700">Disponibilidad</label>
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                name="availability" id="availability">
                        </div> --}}
                        <div class="form-group form-check text-center mb-6">
                            <input type="checkbox"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm
                                bg-white checked:bg-blue-600 checked:border-blue-600
                                focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                id="status" name="status" checked>
                            <label class="form-check-label inline-block text-gray-800"
                                for="status">Activo</label>
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
                            uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg
                            transition duration-150 ease-in-out">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('companyModal');
        const buttons = document.querySelectorAll('[data-bs-toggle="modal"]');
        const form = document.getElementById('companyForm');

        buttons.forEach(button => {
            button.addEventListener('click', async () => {
                let response = await fetch('/companies/' + button.dataset.id);
                let data = await response.json();
                modal.querySelector('[name="name"]').value = data.name || '';
                modal.querySelector('[name="ruc"]').value = data.ruc || '';
                modal.querySelector('[name="address"]').value = data.address || '';
                modal.querySelector('[name="attention"]').value = data.attention || '';
                // modal.querySelector('[name="paymentMethod"]').value = data.paymentMethod || '';
                // modal.querySelector('[name="paymentDays"]').value = data.paymentDays || '';
                // modal.querySelector('[name="currency"]').value = data.currency || '';
                // modal.querySelector('[name="availability"]').value = data.availability || '';
                modal.querySelector('[name="status"]').checked = data.status || false;

                console.log(data);
            });
        });
    </script>
</x-app-layout>
