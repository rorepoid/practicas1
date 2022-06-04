<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="flex-1 ml-80">
        <div class="h-96 bg-amber-400 p-10">
            <h1 class="text-4xl">Top Content</h1>
        </div>
        <div class="h-96 bg-white p-10">
            <h1 class="text-4xl">Middle Content</h1>
        </div>
        <div class="h-96 bg-green-400 p-10">
            <h1 class="text-4xl">Middle Content</h1>
        </div>
        <div class="h-96 bg-indigo-400 p-10">
            <h1 class="text-4xl">Last Content</h1>
        </div>
    </main>
</x-app-layout>
