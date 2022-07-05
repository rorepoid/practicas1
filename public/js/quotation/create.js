/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/quotation/create.js ***!
  \******************************************/
var form = document.querySelector('#quotationCreateForm');
var table = document.querySelector('#quotationTable');
var companies = JSON.parse(form.dataset.companies);
var companiesSelect = form.elements['companies'];
var commercialData = ['RECOGO DE MATERIALES EN TODO LIMA Y CALLAO.', 'SEGURO COMPLEMENTARIO DE TRABAJO DE RIESGO (SCTR), SALUD Y PENSION.', 'MONITOREO Y SEGUIMIENTO DE UNIDADES EN BASE MEDIANTE CENTRO DE CONTROL.', 'NO INCLUYE CARGA NI DESCARGA', 'SISTEMA DE GESTION GPS, PARA TODOS NUESTROS SERVICIOS DE CARGA PESADA Y SOBREDIMENSIONADA.'];
var quantityInput = document.querySelector('#quantity');
var unitPriceInput = document.querySelector('#unitPrice');
var itemRow = document.querySelector('#itemRow'); // const createCommercialDataRowElement = text => {
//     let tr = document.createElement("tr");
//     tr.classList.add("commercialDataRow");
//     tr.innerHTML = `
//         <th scope="row">&nbsp</th>
//         <td></td>
//         <td></td>
//         <td class="p-0 border-0 text-left flex">
//             <span class="w-full p-2" role="textbox">${text || ''}</span>
//         </td>
//         <td></td>
//         <td></td>
//         <td></td>
//     `;
//     return tr;
// }
// companies.forEach(company => {
//     let option = document.createElement("option");
//     option.value = company.id;
//     option.innerHTML = company.name;
//     companiesSelect.appendChild(option);
// });
// companiesSelect.addEventListener("change", e => {
//     let company = companies.find(company => company.ruc == companiesSelect.value)
//     document.querySelector("[name='ruc']").value = company?.ruc || ''
//     document.querySelector("[name='payment_method']").value = company?.preferred_payment_method || ''
//     document.querySelector("[name='attention']").value = company?.attention || ''
// })
// commercialData.forEach(text => {
//     let tr = createCommercialDataRowElement(text);
//     table.querySelector('tbody').appendChild(tr);
// });
// get all inputs type number
// itemRow.querySelectorAll('input[type="number"]').forEach(input => {
//     input.addEventListener('keyup', e => {
//         // multiply quantity by unit price
//         let quantity = quantityInput.value;
//         let unitPrice = unitPriceInput.value;
//         let total = quantity * unitPrice;
//         document.querySelector('[name="subtotal"]').value = `S/ ${total}`;
//         document.querySelector('[name="total"]').value = `S/ ${total}`;
//         document.querySelector('[name="resume_subtotal"]').value = `S/ ${total}`;
//         document.querySelector('[name="resume_igv"]').value = `S/ ${(total * 0.18).toFixed(2)}`;
//         document.querySelector('[name="resume_total"]').value = `S/ ${(total * 1.18).toFixed(2)}`;
//     });
// });
// table.querySelector('#addCommercialData').addEventListener('click', e => {
//     let newRow = createCommercialDataRowElement();
//     table.querySelector('tbody').insertBefore(newRow, table.querySelector('tbody tr:last-child'));
//     newRow.querySelector('span').focus();
// })
/******/ })()
;