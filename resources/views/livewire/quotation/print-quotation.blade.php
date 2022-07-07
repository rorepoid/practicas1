<div data-companies='@json($companies)'>
    <div class="grid grid-cols-2 gap-4 p-3">
        <div class="col">
            <div class="border border-dark p-3">
                <p class="">
                    <label>SEÑORES:</label>
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">{{ $companyName }}</p>
                </p>
                <p class="">
                    <label>RUC: </label>
                    {{-- <input name="ruc" type="text" class="form-control col-span-4" formControlName="ruc" required readonly
                        wire:model="ruc"> --}}
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">{{ $ruc }}</p>
                </p>
                <p class="">
                    <label>FORMA DE PAGO:</label>
                    {{-- <input name="payment_method" type="text" class="form-control col-span-4"
                        formControlName="payment_method" required wire:model="paymentMethod"> --}}
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">{{ $paymentMethod }}</p>
                </p>

                <p class="">
                    <label>DISPONIBILIDAD:</label>
                    {{-- <input type="text" class="form-control col-span-4"
                        value="DE ACUERDO A LA CONFIRMACIÓN DEL SERVICIO" disabled> --}}
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">
                        DE ACUERDO A LA CONFIRMACIÓN DEL SERVICIO
                    </p>
                </p>
            </div>
        </div>
        <div class="col">
            <div class="border border-dark p-3">
                <p class="">
                    <label>ATENCION: </label>
                    {{-- <input name="attention" type="text" class="form-control col-span-4" formControlName="attention"
                        required wire:model="attention"> --}}
                     <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">{{ $attention }}</p>
                </p>
                <p class="">
                    <label>FECHA :</label>
                    {{-- <input name="fecha" type="date" class="form-control col-span-4" formControlName="date"
                        value="{{ now()->format('Y-m-d') }}" required wire:model="date"> --}}
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">{{ now()->format('Y-m-d') }}</p>
                </p>
                <p class="">
                    <label class="col-span-2">VALIDEZ DE COTIZACION :</label>
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">15 DÍAS</p>
                    {{-- <input type="text" class="form-control col-span-3" value="15 DÍAS" disabled> --}}
                </p>
                <p class="">
                    <label>MONEDA:</label>
                    <p class="w-full py-2 px-3 border border-2 col-span-4" role="textbox">SOLES</p>
                    {{-- <input type="text" class="form-control col-span-4" value="SOLES" disabled> --}}
                </p>
            </div>
        </div>
    </div>
    <table class="table table-bordered border-dark text-center" id="quotationTable">
        <thead>
            <tr>
                <th scope="col">ITEM</th>
                <th scope="col">CANT.</th>
                <th scope="col">UNIDAD</th>
                <th scope="col">DESCRIPCION DEL SERVICIO</th>
                <th scope="col">PRECIO UNIT.</th>
                <th scope="col">SUB.TOTAL</th>
                <th scope="col">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr id="itemRow">
                <th scope="row">1</th>
                <td class="text-center" style="width: 8%">
                    {{ $quantity }}
                </td>
                <td>UNID.</td>
                <td class="text-left">
                    SERVICIO DE TRANSPORTE EN {{ $transportUnit }}
                </td>
                <td class="text-center" style="width: 8%">
                    S/ {{ $unitPrice }}
                </td>
                <td class="text-center" style="width: 8%">
                    S/ {{ $subtotal }}
                </td>
                <td class="text-center" style="width: 8%">
                    S/ {{ $subtotal }}
                </td>
            </tr>

            <!--FILA 2 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="p-0 border-0 text-left flex">
                    <label for="materials" class="p-2">SERVICIO COTIZADO PARA EL TRANSLADO DE {{ $materials }}
                    {{-- <span
                        class="py-2 px-3 border border-2" role="textbox" contenteditable
                        wire:model="materials">MATERIALES VARIOS</span> --}}
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!--FILA 3 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="text-left">
                    <label for="weight" class="">PESO: {{ $weight }} TONELADAS</label>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!--FILA 4 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="p-0 border-0 text-left flex">
                    <label for="pickupAddress" class="p-2 w-80">LUGAR DE RECOJO: {{ $pickupAddress }}</label>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!--FILA 5 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="text-left">
                    <label for="deliveryAddress" class="">LUGAR DE ENTREGA: {{ $deliveryAddress }}</label>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!--FILA 6 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!--FILA 8 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="comerciales text-left"><B>DATOS COMERCIALES</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($commercialData as $commercial)
                <tr>
                    <th scope="row">&nbsp</th>
                    <td></td>
                    <td></td>
                    <td class="p-0 border-0 text-left flex">
                        <span class="w-full p-2" role="textbox">{{ $commercial }}</span>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            {{-- <tr id="addCommercialData">
            <th scope="row">&nbsp</th>
            <td></td>
            <td></td>
            <td style='text-align: left;'></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> --}}
        </tbody>
    </table>
    <div class="flex justify-end">
        <div class="">
            <table class="table-bordered border-dark">
                <tr>
                    <td class="py-1 px-4">Sub Total</td>
                    <td class="py-0 px-4" style="width: 8rem">
                        <input type="text" name="resume_subtotal"
                            class="w-full m-0 p-0 border-none text-left bg-gray-100" disabled wire:model="subtotal">
                    </td>
                </tr>
                <tr>
                    <td class="py-1 px-4">IGV</td>
                    <td class="py-0 px-4" style="width: 8rem">
                        <input type="text" name="resume_igv"
                            class="w-full m-0 p-0 border-none text-left bg-gray-100" disabled wire:model="igv">
                    </td>
                </tr>
                <tr>
                    <td class="py-1 px-4">Total</td>
                    <td class="py-0 px-4" style="width: 8rem">
                        <input type="text" name="resume_total"
                            class="w-full m-0 p-0 border-none text-left bg-gray-100" disabled wire:model="total">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
