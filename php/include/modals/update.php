<!-- Modal -->
<form id="UPDATEFORM" enctype="multipart/form-data">
    <div class="modal fade" id="updateMODAL" tabindex="-1" aria-labelledby="updateMODAL" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
            <div class="modal-content container-fluid bg-white rounded-25 p-4">
                <h2 class="fw-bold">Edit a MacBook</h2>
                <div class="row mt-3">
                    <div class="col-6">
                        <h3>Model Information</h3>
                        <div class="mb-3">
                            <span>Model Number:</span>
                            <input readonly="readonly" type="text" name="editModelNumber" id="editModelNumber" class="text-center form-control input-secondary rounded-10 border-none">
                            <span>Variant Name:</span>
                            <input type="text" name="editVariantName" id="editVariantName" class="text-center form-control input-secondary rounded-10 border-none">
                        </div>
                        <h3>Specifications</h3>
                        <div class="overflow-auto" style="max-height: 250px !important;">
                            <span>Processor Options:</span>
                            <div id="EditProcessor" class="container-register">
                            </div>
                            <span>Memory Options:</span>
                            <div id="EditMemory" class="container-register">
                            </div>
                            <span>Storage Options:</span>
                            <div id="EditStorage" class="container-register">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h3>Add Image</h3>
                        <label for="EditIMG" class="text-center rounded-10 d-flex flex-column input-secondary w-100 h-100" style="max-height:300px;">
                            <div class="justify-content-center align-items-center align-self-center row h-100">
                                <div class="row align-self-center justify-content-center align-items-center h-100" id="EditIMG-label" style="max-height: 250px !important;">
                                </div>
                            </div>
                        </label>
                        <input onchange="replaceIMG('EditIMG')" type="file" accept="image/*" name="EditIMG" id="EditIMG" class="form-control" hidden>
                    </div>
                </div>
                <div class="align-self-end">
                    <button type="button" class="mt-3 btn btn-secondary fit align-self-end rounded-10 border-none" data-bs-dismiss="modal" aria-label="Close">Discard</button>
                    <button type="submit" class="mt-3 btn btn-primary fit align-self-end rounded-10 border-none">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>