<aside class="w-80 fixed left-0 top-0 h-screen" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-blue-900 rounded dark:bg-blue-800 h-screen">
        <div class="shrink-0 flex items-center">
            <a href="{{ route('home') }}">
                <x-application-logo class="block fill-current text-gray-600" />
            </a>
        </div>

        <ul class="space-y-2">
            <li>
                <a href="{{ route('home') }}"
                    class="flex items-center p-2 text-base font-normal text-gray-100 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-blue-700 hover:text-black {{ request()->route()->getName() === 'home' ? 'bg-gray-300 text-black' : '' }}">
                    <img src="{{ asset('svg/cotizacion.svg') }}" width="70px" height="70px" />

                    <span class="flex-1 ml-3 text-2xl whitespace-nowrap">Cotización</span>
                </a>
            </li>
            <li>
                <a href="{{ route('companies.index') }}"
                    class="flex items-center p-2 text-base font-normal text-gray-100 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-blue-700 hover:text-black {{ request()->route()->getName() === 'companies.index' ? 'bg-gray-300 text-black' : '' }}">
                    <img src="{{ asset('svg/proveedores.svg') }}" width="70px" height="70px" />
                    <span class="flex-1 ml-3 text-2xl whitespace-nowrap">Proveedores</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-normal text-gray-100 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-blue-700 hover:text-black {{ request()->route()->getName() === 'reports' ? 'bg-gray-300 text-black' : '' }}">
                    <img src="{{ asset('svg/reportes.svg') }}" width="70px" height="70px" />
                    <span class="ml-3 text-2xl">Reportes</span>
                </a>
            </li>
            <li>
        </ul>
    </div>
</aside>
