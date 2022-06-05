<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4">
            <h2>Register a MacBook</h2>
            <div class="row mt-3">
                <div class="col-6">
                    <h3>Model Information</h3>
                    <div class="mb-3">
                        <span>Model Number:</span>
                        <input type="text" name="registerModelNumber" id="registerModelNumber" class="form-control input-secondary rounded-10 border-none">
                        <span>Variant Name:</span>
                        <input type="text" name="registerVariantName" id="registerVariantName" class="form-control input-secondary rounded-10 border-none">
                    </div>
                    <h3>Specifications</h3>
                    <div class="overflow-auto" style="max-height: 250px !important;">
                        <span>Processor Options:</span>
                        <div id="RegisterProcessor" class="container-register">
                            <div class="input-group">
                                <input type="text" name="cpuName[]" required="required" id="cpuName" class="form-control input-secondary border-none text-center rounded-10-start" placeholder="Name"></input>
                                <input type="number" name="cpuCores[]" required="required" id="cpuCores" class="form-control input-secondary border-none text-center" placeholder="Core Count"></input>
                                <button class="btn btn-success rounded-10-end" type="button" onclick="newCPU()">+</button>
                            </div>
                        </div>
                        <span>Memory Options:</span>
                        <div id="RegisterMemory" class="container-register">
                            <div class="input-group">
                                <input type="number" name="memoryCapacity[]" required="required" id="memoryCapacity" class="form-control input-secondary border-none text-center rounded-10-start" placeholder="Capacity"></input>
                                <select class="form-control input-secondary border-none text-center" required="required" name="memoryUnit[]" id="memoryUnit">
                                    <option value="GB">GB</option>
                                    <option value="TB">TB</option>
                                </select>
                                <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory();">+</button>
                            </div>
                        </div>
                        <span>Storage Options:</span>
                        <div id="RegisterStorage" class="container-register">
                            <div class="input-group">
                                <input type="number" name="storageCapacity[]" required="required" id="storageCapacity" class="form-control input-secondary border-none text-center rounded-10-start" placeholder="Capacity"></input>
                                <select class="form-control input-secondary border-none text-center" required="required" name="storageUnit[]" id="storageUnit">
                                    <option value="TB">TB</option>
                                    <option value="GB">GB</option>
                                </select>
                                <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage();">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Add Image</h3>
                    <label for="RegisterIMG" class="text-center rounded-10 d-flex flex-column input-secondary w-100 h-100" style="max-height:300px;">
                        <div class="justify-content-center align-items-center align-self-center row h-100">
                            <div class="row align-self-center justify-content-center align-items-center h-100" id="RegisterIMG-label" style="max-height: 250px !important;">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M21.02 5H19V2.98c0-.54-.44-.98-.98-.98h-.03c-.55 0-.99.44-.99.98V5h-2.01c-.54 0-.98.44-.99.98v.03c0 .55.44.99.99.99H17v2.01c0 .54.44.99.99.98h.03c.54 0 .98-.44.98-.98V7h2.02c.54 0 .98-.44.98-.98v-.04c0-.54-.44-.98-.98-.98zM16 9.01V8h-1.01c-.53 0-1.03-.21-1.41-.58-.37-.38-.58-.88-.58-1.44 0-.36.1-.69.27-.98H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8.28c-.3.17-.64.28-1.02.28-1.09-.01-1.98-.9-1.98-1.99zM15.96 19H6c-.41 0-.65-.47-.4-.8l1.98-2.63c.21-.28.62-.26.82.02L10 18l2.61-3.48c.2-.26.59-.27.79-.01l2.95 3.68c.26.33.03.81-.39.81z" />
                                    </svg>
                                    <span>Click here to add image</span>
                                </div>
                            </div>
                        </div>
                    </label>
                    <input type="file" accept="image/*" name="RegisterIMG" id="RegisterIMG" class="form-control" hidden>
                </div>
            </div>
            <div class="align-self-end">
                <button type="button" class="mt-3 btn btn-secondary fit align-self-end rounded-10 border-none" data-bs-dismiss="modal" aria-label="Close">Discard</button>
                <button type="button" class="mt-3 btn btn-primary fit align-self-end rounded-10 border-none">Save</button>
            </div>
        </div>
    </div>
</div>