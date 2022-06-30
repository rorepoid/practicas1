<x-app-layout>
    <x-slot name="header">REPORTES</x-slot>
    <x-slot name="styles">
    </x-slot>

    <div class="flex justify-end">
        <div class="border border-3.5 border-black p-3 mr-10 mt-5 text-xl">
            <h2>GANANCIA TOTAL S/ {{ $quotationsTotalSum }}</h2>
        </div>
    </div>
    <div class="m-10 bg-white">
        <livewire:report.list-reports />
    </div>
</x-app-layout>
