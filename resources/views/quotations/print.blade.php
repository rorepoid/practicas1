<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    @livewireStyles

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main class="container">
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
                        Por la presente es grato dirigido a Usted, para saludarlo cordialmente y a su vez hacerle
                        llegar
                        nuestra mejor oferta para el servicio.
                    </div>
                </div>

                <livewire:quotation.print-quotation :quotation="$quotation" />
            </div>
        </main>
    </div>
    @livewireScripts
    @livewire('livewire-ui-modal')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
