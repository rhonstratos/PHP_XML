<!-- Modal -->
<form id="REGISTERFORM" enctype="multipart/form-data">
    <div class="modal fade" id="registerMODAL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
            <div class="modal-content container-fluid bg-white rounded-25 p-4">
                <div class="navbar">
                    <h2 class="fw-bold">Register a MacBook</h2>
                    <button type="button" class="border-none close-svg rounded-25 m-0 p-1" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="white">
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
                            <input required="required" type="text" name="registerModelNumber" id="registerModelNumber" class="text-center form-control input-secondary rounded-10 border-none">
                            <span>Variant Name:</span>
                            <input required="required" type="text" name="registerVariantName" id="registerVariantName" class="text-center form-control input-secondary rounded-10 border-none">
                        </div>
                        <h3>Specifications</h3>
                        <div class="overflow-auto" style="max-height: 250px !important;">
                            <span>Processor Options:</span>
                            <div id="RegisterProcessor" class="container-register">
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
                                    <button class="btn btn-success rounded-10-end" type="button" onclick="newCPU('RegisterProcessor')">+</button>
                                </div>
                            </div>
                            <span>Memory Options:</span>
                            <div id="RegisterMemory" class="container-register">
                                <div class="input-group">
                                    <select class="form-control input-secondary border-none text-center" required="required" name="memoryCapacity[]" id="memoryCapacity">
                                        <option value="" disabled selected>Memory Options</option>
                                        <option value="4 GB">4 GB</option>
                                        <option value="8 GB">8 GB</option>
                                        <option value="16 GB">16 GB</option>
                                        <option value="32 GB">32 GB</option>
                                        <option value="64 GB">64 GB</option>
                                    </select>
                                    <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory('RegisterMemory');">+</button>
                                </div>
                            </div>
                            <span>Storage Options:</span>
                            <div id="RegisterStorage" class="container-register">
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
                                    <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage('RegisterStorage');">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h3>Add Image</h3>
                        <label for="RegisterIMG" class="text-center rounded-10 d-flex flex-column input-secondary w-100 h-100" style="max-height:300px;">
                            <div class="justify-content-center align-items-center align-self-center row h-100">
                                <div class="row align-self-center justify-content-center align-items-center h-100" id="RegisterIMG-label" style="max-height: 250px !important;">
                                    <div class="row justify-content-center align-items-center align-self-center align-middle">
                                        <img src="../assets/icons/addImg.png" alt="..." style="height: 50px !important; width: 75px !important;">
                                        <span>Click here to add image</span>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input required="required" onchange="replaceIMG('RegisterIMG')" type="file" accept="image/*" name="RegisterIMG" id="RegisterIMG" class="form-control" hidden>
                    </div>
                </div>
                <div class="align-self-end">
                    <button type="button" class="mt-3 btn btn-secondary fit align-self-end rounded-10 border-none" data-bs-dismiss="modal" aria-label="Close"><img src="../assets/icons/delete.png" alt="..." style="max-height: 25px; max-width: 25px; margin-bottom: 2.5px;">Discard</button>
                    <button type="submit" class="mt-3 btn btn-primary fit align-self-end rounded-10 border-none"><img class="mb-1 me-1" src="../assets/icons/save.png" alt="..." style="max-height: 20px; max-width: 20px;">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>