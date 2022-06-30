<x-app-layout>
    <x-slot name="header">EDITAR COTIZACIÓN</x-slot>
    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>
    @endpush

    <div class="p-3">
        <div class="bg-white p-3 row align-items-center">
            <div class="col" style="align:center;">
                <x-application-logo class="block fill-current text-gray-600" />
            </div>
            <div class="col">
                <br>
                <p class="text-center fuenteinical"><B>SERVICIO LOGÍSTICO - TRANSPORTE</B></p>
            </div>
            <div class="col" style="align:center;">
                <div class="border border-dark p-3">
                    <h4>COTIZACION: 020 - {{ sprintf('%03d', $quotation->id) }}</h4>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <br>
                    <p>RUC: 20600494776</p>
                    <p>DIRECCION: MZ. A LT. 11 A.V. PERPETUO SOCORRO / ATE- LIMA / LIMA</p>
                    <p>CORREOS: VENTAS@DCARGOEXPRESS.COM / COMERCIAL@DCARGOEXPRESS.COM</p>
                </div>
            </div>
            <div class="border border-dark margen">
                Por la presente es grato dirigido a Usted, para saludarlo cordialmente y a su vez hacerle llegar
                nuestra mejor oferta para el servicio.
            </div>
        </div>

        <livewire:quotation.edit-quotation :quotation="$quotation" />
    </div>
    @push('scripts')
        <script src="{{ mix('js/quotation/create.js') }}"></script>
    @endpush
</x-app-layout>
