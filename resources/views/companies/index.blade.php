<x-app-layout>
    <x-slot name="header">PROVEEDORES</x-slot>
    <x-slot name="styles">
    </x-slot>

    <button type="submit"
        class="w-48 px-6 m-10 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
        uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg
        transition duration-150 ease-in-out"
        onclick="Livewire.emit('openModal', 'company.create')">AGREGAR</button>
    <div class="mx-10 bg-white">
        <livewire:company.list-companies />
    </div>

    <script>
        // const companyTable = document.querySelector('#companiesTable');
        // const companyEditButtons = companyTable.querySelectorAll('[data-bs-toggle="modal"]');
        // const editModal = document.getElementById('companyEditModal');
        // const form = document.getElementById('companyForm');

        // companyEditButtons.forEach(button => {
        //     button.addEventListener('click', async () => {
        //         let response = await fetch('/companies/' + button.dataset.id);
        //         let data = await response.json();
        //         editModal.querySelector('[name="name"]').value = data.name || '';
        //         editModal.querySelector('[name="ruc"]').value = data.ruc || '';
        //         editModal.querySelector('[name="address"]').value = data.address || '';
        //         editModal.querySelector('[name="attention"]').value = data.attention || '';
        //         editModal.querySelector('[name="status"]').checked = data.status || false;

        //         console.log(data);
        //     });
        // });
    </script>
</x-app-layout>
