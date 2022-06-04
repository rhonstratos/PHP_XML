function newProcessor() {
    const node = $("#RegisterProcessor")
    node.append(`
    <div class="input-group">
        <input type="text" name="cpuName[]" required="required" id="cpuName" class="form-control input-secondary border-none text-center rounded-10-start" placeholder="Name"></input>
        <input type="number" name="cpuCores[]" required="required" id="cpuCores" class="form-control input-secondary border-none text-center" placeholder="Core Count"></input>
        <button class="btn btn-success rounded-10-end" type="button" onclick="newCPU();">+</button>
    </div>`)
}
function newMemory() {
    const node = $("#RegisterMemory")
    node.append(`
    <div class="input-group">
        <input type="number" name="memoryCapacity[]" required="required" id="memoryCapacity" class="form-control input-secondary border-none text-center rounded-10-start" placeholder="Capacity"></input>
        <select class="form-control input-secondary border-none text-center" required="required" name="memoryUnit[]" id="memoryUnit">
            <option value="GB">GB</option>
            <option value="TB">TB</option>
        </select>
        <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory();">+</button>
    </div>`)
}
function newStorage() {
    const node = $("#RegisterStorage")
    node.append(`
    <div class="input-group">
        <input type="number" name="storageCapacity[]" required="required" id="storageCapacity" class="form-control input-secondary border-none text-center rounded-10-start" placeholder="Capacity"></input>
        <select class="form-control input-secondary border-none text-center" required="required" name="storageUnit[]" id="storageUnit">
            <option value="TB">TB</option>
            <option value="GB">GB</option>
        </select>
        <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage();">+</button>
    </div>`)
}
export { newProcessor, newMemory, newStorage }