<!-- Modal -->
<form id="UPDATEFORM" enctype="multipart/form-data">
    <div class="modal fade" id="editMODAL" tabindex="-1" aria-labelledby="editMODAL" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
            <div class="modal-content container-fluid bg-white rounded-25 p-4">
                <h2 class="fw-bold">Edit a MacBook</h2>
                <div class="row mt-3">
                    <div class="col-6">
                        <h3>Model Information</h3>
                        <div class="mb-3">
                            <span>Model Number:</span>
                            <input type="text" name="editModelNumber" id="editModelNumber" class="text-center form-control input-secondary rounded-10 border-none">
                            <span>Variant Name:</span>
                            <input type="text" name="editVariantName" id="editVariantName" class="text-center form-control input-secondary rounded-10 border-none">
                        </div>
                        <h3>Specifications</h3>
                        <div class="overflow-auto" style="max-height: 250px !important;">
                            <span>Processor Options:</span>
                            <div id="EditProcessor" class="container-register">
                                <div class="input-group">
                                    <select class="form-control input-secondary border-none text-center" required="required" name="processor[]" id="processor">
                                        <option value="" disabled selected>Processor Options</option>
                                        <option value="Apple M1|8">Apple M1 (8 Cores)</option>
                                        <option value="Apple M1 Pro|10">Apple M1 Pro (10 Cores)</option>
                                        <option value="Apple M1 Max|10">Apple M1 Max (10 Cores)</option>
                                        <option value="Intel Core i5|2">Intel Core i5 (2 Cores)</option>
                                        <option value="Intel Core i5|4">Intel Core i5 (4 Cores)</option>
                                        <option value="Intel Core i7|2">Intel Core i7 (2 Cores)</option>
                                        <option value="Intel Core i7|4">Intel Core i7 (4 Cores)</option>
                                        <option value="Intel Core i7|6">Intel Core i7 (6 Cores)</option>
                                        <option value="Intel Core i9|8">Intel Core i9 (8 Cores)</option>
                                    </select>
                                    <button class="btn btn-success rounded-10-end" type="button" onclick="newCPU()">+</button>
                                </div>
                            </div>
                            <span>Memory Options:</span>
                            <div id="EditMemory" class="container-register">
                                <div class="input-group">
                                    <select class="form-control input-secondary border-none text-center" required="required" name="memoryCapacity[]" id="memoryCapacity">
                                        <option value="" disabled selected>Memory Options</option>
                                        <option value="4 GB">4 GB</option>
                                        <option value="8 GB">8 GB</option>
                                        <option value="16 GB">16 GB</option>
                                        <option value="32 GB">32 GB</option>
                                        <option value="64 GB">64 GB</option>
                                    </select>
                                    <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory();">+</button>
                                </div>
                            </div>
                            <span>Storage Options:</span>
                            <div id="EditStorage" class="container-register">
                                <div class="input-group">
                                    <select class="form-control input-secondary border-none text-center" required="required" name="storageCapacity[]" id="storageCapacity">
                                        <option value="" disabled selected>Storage Options</option>
                                        <option value="256GB SSD">256GB SSD</option>
                                        <option value="512GB SSD">512GB SSD</option>
                                        <option value="1TB SSD">1TB SSD</option>
                                        <option value="2TB SSD">2TB SSD</option>
                                        <option value="4TB SSD">4TB SSD</option>
                                        <option value="8TB SSD">8TB SSD</option>
                                    </select>
                                    <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage();">+</button>
                                </div>
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
                        <input type="file" accept="image/*" name="EditIMG" id="EditIMG" class="form-control" hidden>
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