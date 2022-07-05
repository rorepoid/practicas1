<x-app-layout>
    <x-slot name="header">CLIENTES</x-slot>
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
</x-app-layout>
