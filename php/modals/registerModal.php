<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4">
            <h2>Register a MacBook</h2>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="mb-3">
                        <h3>Model Information</h3>
                        <span>Model Number:</span>
                        <input type="text" name="registerModelNumber" id="registerModelNumber" class="form-control input-secondary rounded-10 border-none">
                        <span>Variant Name:</span>
                        <input type="text" name="registerVariantName" id="registerVariantName" class="form-control input-secondary rounded-10 border-none">
                    </div>
                    <div>
                        <h3>Specifications</h3>
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
                    <img src="../assets/macBook.png" width="200" alt="">
                </div>
            </div>
            <div class="align-self-end">
                <button class="mt-3 btn btn-primary fit align-self-end">Save</button>
                <button class="mt-3 btn btn-primary fit align-self-end">Save</button>
                <button class="mt-3 btn btn-primary fit align-self-end">Save</button>
            </div>
        </div>
    </div>
</div>