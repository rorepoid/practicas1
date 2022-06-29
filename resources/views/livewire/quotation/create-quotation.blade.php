<form id="quotationCreateForm" data-companies='@json($companies)' wire:submit.prevent="store">
    <div class="grid grid-cols-2 gap-4 p-3">
        <div class="col">
            <div class="border border-dark p-3">
                <div class="grid grid-cols-1 md:grid-cols-6">
                    <p class="input-group mb-3">
                        <label>SEÑORES: </label>
                        <select name="companies" wire:model.defer="company_id">
                            <option value="">SELECCIONAR</option>
                        </select>
                    </p>
                    <p class="input-group mb-3">
                        <label>RUC: </label>
                        <input name="ruc" type="text" class="form-control" formControlName="ruc">

                    </p>
                    <p class="input-group mb-3">
                        <label>FORMA DE PAGO:</label>
                        <input name="payment_method" type="text" class="form-control"
                            formControlName="payment_method">
                    </p>

                    <p class="input-group mb-3">
                        <label>DISPONIBILIDAD:</label>
                        <input type="text" class="form-control" value="DE ACUERDO A LA CONFIRMACIÓN DEL SERVICIO"
                            disabled>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="border border-dark p-3">
                <p class="input-group mb-3">
                    <label>ATENCION: </label>
                    <input name="attention" type="text" class="form-control" formControlName="attention">
                </p>
                <p class="input-group mb-3">
                    <label>FECHA :</label>
                    <input name="fecha" type="date" class="form-control" formControlName="distrito"
                        value="{{ now()->format('Y-m-d') }}">
                </p>
                <p class="input-group mb-3">
                    <label>VALIDEZ DE COTIZACION :</label>
                    <input type="text" class="form-control" value="15 DÍAS" disabled>
                </p>
                <p class="input-group mb-3">
                    <label>MONEDA:</label>
                    <input type="text" class="form-control" value="SOLES" disabled>
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
                    <input class="w-full m-0 p-2 border-none text-center bg-gray-100" type="number" name="quantity"
                        id="quantity">
                </td>
                <td>UNID.</td>
                <td class="p-0 border-0 text-left flex">
                    <span class="p-2">SERVICIO DE TRANSPORTE EN </span>
                    <select class="bg-gray-100 py-0" name="transportUnit" id="transportUnit">
                        <option value="">PLATAFORMA</option>
                        <option value="1">CAMIÓN REBATIBLE</option>
                        <option value="2">CAMIÓN DOBLE EJE</option>
                        <option value="3">PORTER</option>
                        <option value="4">CAMABAJA</option>
                    </select>
                </td>
                <td class="p-0 text-center" style="width: 8%">
                    <div class="flex">
                        <span class="p-2">S/ </span>
                        <input class="w-full m-0 p-2 border-none text-left bg-gray-100" type="number" name="unitPrice"
                            id="unitPrice">
                    </div>
                </td>
                <td class="p-0" style="width: 8%">
                    <input class="w-full bg-gray-100 border-none text-center" type="text" id="subtotal" name="subtotal"
                        readonly>
                </td>
                <td class="p-0" style="width: 8%">
                    <input class="w-full bg-gray-100 border-none text-center" type="text" id="total" name="total" readonly>
                </td>
            </tr>

            <!--FILA 2 -->
            <tr>
                <th scope="row">&nbsp</th>
                <td></td>
                <td></td>
                <td class="p-0 border-0 text-left flex">
                    <span class="p-2">SERVICIO COTIZADO PARA EL TRANSLADO DE </span><span
                        class="py-2 px-3 border border-2" role="textbox" contenteditable>MATERIALES VARIOS</span>
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
                    <span class="p-2">PESO: </span><span class="py-2 px-3 border border-2" role="textbox"
                        contenteditable></span><span class="p-2"> TONELADAS</span>
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
                    <span class="p-2">LUGAR DE RECOJO: </span><span class="py-2 px-3 border border-2"
                        role="textbox" contenteditable></span><span class="p-2">
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
                    <span class="p-2">LUGAR DE ENTREGA: </span><span class="py-2 px-3 border border-2"
                        role="textbox" contenteditable>
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
                    <td class="py-1 px-4" style="width: 8rem" name="resume_subtotal">0</td>
                </tr>
                <tr>
                    <td class="py-1 px-4">IGV</td>
                    <td class="py-1 px-4" style="width: 8rem" name="resume_igv">0</td>
                </tr>
                <tr>
                    <td class="py-1 px-4">Total</td>
                    <td class="py-1 px-4" style="width: 8rem" name="resume_total">0</td>
                </tr>
            </table>
        </div>
    </div>
</form>

@push('scripts')
    <script>
        const form = document.querySelector('#quotationCreateForm');
        const table = document.querySelector('#quotationTable');
        const companies = JSON.parse(form.dataset.companies);
        const companiesSelect = form.elements['companies'];
        const commercialData = ['RECOGO DE MATERIALES EN TODO LIMA Y CALLAO.',
            'SEGURO COMPLEMENTARIO DE TRABAJO DE RIESGO (SCTR), SALUD Y PENSION.',
            'MONITOREO Y SEGUIMIENTO DE UNIDADES EN BASE MEDIANTE CENTRO DE CONTROL.', 'NO INCLUYE CARGA NI DESCARGA',
            'SISTEMA DE GESTION GPS, PARA TODOS NUESTROS SERVICIOS DE CARGA PESADA Y SOBREDIMENSIONADA.'
        ];
        const quantityInput = document.querySelector('#quantity');
        const unitPriceInput = document.querySelector('#unitPrice');
        const itemRow = document.querySelector('#itemRow');

        const createCommercialDataRowElement = text => {
            let tr = document.createElement("tr");
            tr.classList.add("commercialDataRow");
            tr.innerHTML = `
            <th scope="row">&nbsp</th>
            <td></td>
            <td></td>
            <td class="p-0 border-0 text-left flex">
                <span class="w-full p-2" role="textbox">${text || ''}</span>
            </td>
            <td></td>
            <td></td>
            <td></td>
        `;
            return tr;
        }

        companies.forEach(company => {
            let option = document.createElement("option");
            option.value = company.ruc;
            option.innerHTML = company.name;
            companiesSelect.appendChild(option);
        });

        companiesSelect.addEventListener("change", e => {
            let company = companies.find(company => company.ruc == companiesSelect.value)
            document.querySelector("[name='ruc']").value = company?.ruc || ''
            document.querySelector("[name='payment_method']").value = company?.preferred_payment_method || ''
            document.querySelector("[name='attention']").value = company?.attention || ''
        })

        commercialData.forEach(text => {
            let tr = createCommercialDataRowElement(text);
            table.querySelector('tbody').appendChild(tr);
        });

        // get all inputs type number
        itemRow.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('keyup', e => {
                // multiply quantity by unit price
                let quantity = quantityInput.value;
                let unitPrice = unitPriceInput.value;
                let total = quantity * unitPrice;
                document.querySelector('[name="subtotal"]').value = `S/ ${total}`;
                document.querySelector('[name="total"]').value = `S/ ${total}`;
                document.querySelector('[name="resume_subtotal"]').innerHTML = `S/ ${total}`;
                document.querySelector('[name="resume_igv"]').innerHTML = `S/ ${(total * 0.18).toFixed(2)}`;
                document.querySelector('[name="resume_total"]').innerHTML = `S/ ${(total * 1.18).toFixed(2)}`;
            });
        });

        // table.querySelector('#addCommercialData').addEventListener('click', e => {
        //     let newRow = createCommercialDataRowElement();
        //     table.querySelector('tbody').insertBefore(newRow, table.querySelector('tbody tr:last-child'));
        //     newRow.querySelector('span').focus();
        // })
    </script>
@endpush
