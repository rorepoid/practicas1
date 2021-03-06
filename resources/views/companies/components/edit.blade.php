<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="companyEditModal" tabindex="-1" aria-labelledby="companyEditModalLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal-label">
                    EDITAR CLIENTE
                </h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <form>
                    <div class="form-group mb-6">
                        <label for="name" class="form-label inline-block mb-2 text-gray-700">Empresa</label>
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="name" id="name">
                    </div>
                    <div class="form-group mb-6">
                        <label for="ruc" class="form-label inline-block mb-2 text-gray-700">RUC</label>
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="ruc" id="ruc">
                    </div>
                    <div class="form-group mb-6">
                        <label for="address" class="form-label inline-block mb-2 text-gray-700">Domicilio
                            Fiscal</label>
                        <textarea
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                                bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="address" name="address" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-6">
                        <label for="attention" class="form-label inline-block mb-2 text-gray-700">Antenci??n</label>
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="attention" id="attention">
                    </div>
                    <div class="form-group form-check text-center mb-6">
                        <input type="checkbox"
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm
                                bg-white checked:bg-blue-600 checked:border-blue-600
                                focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                            id="status" name="status" checked>
                        <label class="form-check-label inline-block text-gray-800" for="status">Activo</label>
                    </div>
                    <button type="submit"
                        class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
                            uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg
                            transition duration-150 ease-in-out">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
