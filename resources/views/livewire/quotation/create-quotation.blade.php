<form id="quotationCreateForm" data-companies='@json($companies)' wire:submit.prevent="store">
    <div class="grid grid-cols-2 gap-4 p-3">
        <div class="col">
            <div class="border border-dark p-3">
                <p class="grid grid-cols-5 gap-4 mb-3">
                    <label>SEÑORES: </label>
                    <select name="companies" class="col-span-4" wire:change="fillCompanyData" wire:model="companyId">
                        <option value="">SELECCIONAR</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </p>
                <p class="grid grid-cols-5 gap-4 mb-3 mb-3">
                    <label>RUC: </label>
                    <input name="ruc" type="text" class="form-control col-span-4" formControlName="ruc" required
                        wire:model="ruc">
                </p>
                <p class="grid grid-cols-5 gap-4 mb-3 mb-3">
                    <label>FORMA DE PAGO:</label>
                    <input name="payment_method" type="text" class="form-control col-span-4"
                        formControlName="payment_method" required wire:model="paymentMethod">
                </p>

                <p class="grid grid-cols-5 gap-4 mb-3 mb-3">
                    <label>DISPONIBILIDAD:</label>
                    <input type="text" class="form-control col-span-4"
                        value="DE ACUERDO A LA CONFIRMACIÓN DEL SERVICIO" disabled>
                </p>
            </div>
        </div>
        <div class="col">
            <div class="border border-dark p-3">
                <p class="grid grid-cols-5 gap-4 mb-3">
                    <label>ATENCION: </label>
                    <input name="attention" type="text" class="form-control col-span-4" formControlName="attention"
                        required wire:model="attention">
                </p>
                <p class="grid grid-cols-5 gap-4 mb-3">
                    <label>FECHA :</label>
                    <input name="fecha" type="date" class="form-control col-span-4" formControlName="date"
                        value="{{ now()->format('Y-m-d') }}" required wire:model="date">
                </p>
                <p class="grid grid-cols-5 gap-4 mb-3">
                    <label>VALIDEZ DE COTIZACION :</label>
                    <input type="text" class="form-control col-span-4" value="15 DÍAS" disabled>
                </p>
                <p class="grid grid-cols-5 gap-4 mb-3">
                    <label>MONEDA:</label>
                    <input type="text" class="form-control col-span-4" value="SOLES" disabled>
                </p>
            </div>
        </div>
    </div>
    <table class="table table-bordered border-dark text-center" id="quotationTable">
        <thead>
            <tr>
                <th scope="col">ITEM</th>
                <th scope="col">CANTIDAD</th>
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
                <td class="p-0 text-center" style="width: 8%">
                    <input
                        class="w-full m-0 p-2 border-none text-center bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        type="number" name="quantity" id="quantity" min="1" onClick="this.select();" wire:model="quantity">
                </td>
                <td>UNID.</td>
                <td class="p-0 border-0 text-left flex">
                    <span class="p-2">SERVICIO DE TRANSPORTE EN </span>
                    <select class="bg-gray-100 py-0" name="transportUnit" id="transportUnit"
                        wire:model="transportUnit" required>
                        <option value="">SELECCIONAR</option>
                        <option value="PLATAFORMA">PLATAFORMA</option>
                        <option value="CAMIÓN REBATIBLE">CAMIÓN REBATIBLE</option>
                        <option value="CAMIÓN DOBLE EJE">CAMIÓN DOBLE EJE</option>
                        <option value="PORTER">PORTER</option>
                        <option value="CAMABAJA">CAMABAJA</option>
                    </select>
                </td>
                <td class="p-0 text-center" style="width: 8%">
                    <div class="flex">
                        <label class="p-2" for="unitPrice">S/ </label>
                        <input
                            class="w-full m-0 p-2 border-none text-left bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            type="number" name="unitPrice" id="unitPrice" onClick="this.select();"
                            wire:model="unitPrice">
                    </div>
                </td>
                <td class="p-0" style="width: 8%">
                    <input class="w-full bg-gray-100 border-none text-center" type="text" id="subtotal"
                        name="subtotal" disabled wire:model="subtotal">
                </td>
                <td class="p-0" style="width: 8%">
                    <input class="w-full bg-gray-100 border-none text-center" type="text" id="total"
                        name="total" disabled wire:model="subtotal">
                </td>
            </tr>

            <!--FILA 2 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="p-0 border-0 text-left flex">
                    <label for="materials" class="p-2">SERVICIO COTIZADO PARA EL TRANSLADO DE <span
                            class="text-red-500">*</span></label>
                    <input type="text"
                        class="w-full m-0 p-2 border border-2 text-gray-900 text-sm rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        @error('materials') bg-red-100 @else bg-gray-100 @endif"
                        name="materials" id="materials" onClick="this.select();" wire:model="materials">
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
                <td class="p-0 border-0 text-left flex">
                    <label for="weight" class="p-2">PESO: <span class="text-red-500">*</span></label>
                    <input
                        class="w-12 m-0 p-2 border border-2 border-gray-300 text-gray-900 text-sm rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-center bg-gray-100
                        @error('weight') bg-red-100 @else bg-gray-100 @endif"
                        type="number" name="weight" id="weight" onClick="this.select();" required
                        wire:model="weight">
                    <label for="weight" class="p-2">TONELADAS</label>
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
                    <label for="pickupAddress" class="p-2 w-80">LUGAR DE RECOJO: <span
                            class="text-red-500">*</span></label>
                    <input type="text"
                        class="w-full m-0 p-2 border border-2 text-gray-900 text-sm rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        @error('pickupAddress') bg-red-100 @else bg-gray-100 @endif"
                        name="pickupAddress" id="pickupAddress" onClick="this.select();" required
                        wire:model="pickupAddress">
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
                <td class="p-0 border-0 text-left flex">
                    <label for="deliveryAddress" class="p-2 w-80">LUGAR DE ENTREGA: <span
                            class="text-red-500">*</span></label>
                    <input type="text"
                        class="w-full m-0 p-2 border border-2 border-gray-300 text-gray-900 text-sm rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-100
                        @error('deliveryAddress') bg-red-100 @else bg-gray-100 @endif"
                        name="deliveryAddress" id="deliveryAddress" onClick="this.select();" required
                        wire:model="deliveryAddress">
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
    <div class="flex justify-between ...">
        <div class="w-1/3"></div>
        <div class="">
            <button type="submit" class="btn bg-danger text-white">Cancelar</button>
            <button type="submit" class="btn bg-primary text-white">Siguiente</button>
        </div>
        <div class="w-25">
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
</form>
