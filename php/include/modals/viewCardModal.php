<!-- Modal -->
<div class="modal fade" id="viewCardMODAL" tabindex="-1" aria-labelledby="viewCardMODAL" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4">
            <div class="navbar">
                <h2 class="fw-bold">MacBook Information</h2>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h3>Model Information</h3>
                    <div class="mb-3">
                        <span>Model Number:</span>
                        <input readonly="readonly" type="text" name="viewModelNumber" id="viewModelNumber" class="form-control input-secondary rounded-10 border-none">
                        <span>Variant Name:</span>
                        <input readonly="readonly" type="text" name="viewVariantName" id="viewVariantName" class="form-control input-secondary rounded-10 border-none">
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