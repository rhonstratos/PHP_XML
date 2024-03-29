<!-- Modal -->
<div class="modal fade" id="viewCardMODAL" tabindex="-1" aria-labelledby="viewCardMODAL" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4">
            <div class="navbar">
                <h2 class="fw-bold">MacBook Information</h2>
                <button type="button" class="border-none close-svg rounded-25 m-0 p-1" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                    </svg>
                </button>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h3>Model Information</h3>
                    <div class="mb-3">
                        <span>Model Number:</span>
                        <input readonly="readonly" type="text" name="viewModelNumber" id="viewModelNumber" class="text-center form-control input-secondary rounded-10 border-none">
                        <span>Variant Name:</span>
                        <input readonly="readonly" type="text" name="viewVariantName" id="viewVariantName" class="text-center form-control input-secondary rounded-10 border-none">
                    </div>
                    <h3>Specifications</h3>
                    <div class="overflow-auto" style="max-height: 250px !important;">
                        <span>Processor Options:</span>
                        <div id="ViewProcessor" class="container-register">
                        </div>
                        <span>Memory Options:</span>
                        <div id="ViewMemory" class="container-register">
                        </div>
                        <span>Storage Options:</span>
                        <div id="ViewStorage" class="container-register">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>MacBook Image</h3>
                    <div class="text-center rounded-10 d-flex flex-column input-secondary w-100 h-100" style="max-height:300px;">
                        <div class="justify-content-center align-items-center align-self-center row h-100">
                            <div class="row align-self-center justify-content-center align-items-center h-100" id="ViewIMG-label" style="max-height: 250px !important;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>