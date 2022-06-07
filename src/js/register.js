//import $ from 'jquery'
function newProcessor() {
    const node = $("#RegisterProcessor")
    node.append(`
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
    </div>`)
}
function newMemory() {
    const node = $("#RegisterMemory")
    node.append(`
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
    </div>`)
}
function newStorage() {
    const node = $("#RegisterStorage")
    node.append(`
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
    </div>`)
}
function replaceIMG() {
    $('#RegisterIMG-label').html(`
        <img src="${URL.createObjectURL(event.target.files[0])}" alt="..." style="object-fit: cover;" class="w-100 h-100">
    `)
}
export { newProcessor, newMemory, newStorage, replaceIMG }