<x-app-layout>
    <x-slot name="header">COTIZACIONES</x-slot>
    <x-slot name="styles">
    </x-slot>

    <div class="w-12">
        <a href="{{ route('quotations.create') }}">
            <div
                class="w-48 px-6 m-10 py-2.5 bg-blue-600 text-white text-center font-medium text-xs leading-tight
                uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg
                transition duration-150 ease-in-out"
                >NUEVA COTIZACIÓN
            </div>
        </a>
    </div>

    <div class="mx-10 bg-white">
        <livewire:quotation.list-quotations />
    </div>
</x-app-layout>
