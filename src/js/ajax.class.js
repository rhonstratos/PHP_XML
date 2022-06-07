//import $ from 'jquery'
//import 'bootstrap/dist/js/bootstrap.esm.min'
function viewEdit(modelNumber) {
    let params = `?requestNode=true`
    params += `&modelNumber=${modelNumber}`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {
    }).done((data) => {
        const json = JSON.parse(data)
        const macBook = json.macBook
        $("#editModelNumber").val(macBook.modelNumber)
        $("#editVariantName").val(macBook.variantName)
        $('#EditProcessor').html('')
        $('#EditMemory').html('')
        $('#EditStorage').html('')
        $('#EditIMG-label').html('')
        //console.log(macBook)
        $('#EditIMG-label').append(`
        <img src="../assets/${macBook.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">
        `)
        macBook.cpu.forEach(e => {
            $('#EditProcessor')
                .append(`
            <div class="input-group">
                <select class="form-control input-secondary border-none text-center" required="required" name="processor[]" id="processor">
                    <option value="${e.name}|${e.cores}" disabled selected>${e.name} (${e.cores} Cores)</option>
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
            `)
        })
        macBook.memory.forEach(e => {
            $('#EditMemory')
                .append(`
            <div class="input-group">
                <select class="form-control input-secondary border-none text-center" required="required" name="memoryCapacity[]" id="memoryCapacity">
                    <option value="${e.value}" disabled selected>${e.value}</option>
                    <option value="4 GB">4 GB</option>
                    <option value="8 GB">8 GB</option>
                    <option value="16 GB">16 GB</option>
                    <option value="32 GB">32 GB</option>
                    <option value="64 GB">64 GB</option>
                </select>
                <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory();">+</button>
            </div>
            `)
        })
        macBook.storage.forEach(e => {
            $('#EditStorage')
                .append(`
            <div class="input-group">
                <select class="form-control input-secondary border-none text-center" required="required" name="storageCapacity[]" id="storageCapacity">
                    <option value="${e.value}" disabled selected>${e.value}</option>
                    <option value="256GB SSD">256GB SSD</option>
                    <option value="512GB SSD">512GB SSD</option>
                    <option value="1TB SSD">1TB SSD</option>
                    <option value="2TB SSD">2TB SSD</option>
                    <option value="4TB SSD">4TB SSD</option>
                    <option value="8TB SSD">8TB SSD</option>
                </select>
                <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage();">+</button>
            </div>
            `)
        })
    })
}
function viewCard(modelNumber) {
    let params = `?requestNode=true`
    params += `&modelNumber=${modelNumber}`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {
    }).done((data) => {
        const json = JSON.parse(data)
        const macBook = json.macBook
        //console.log(macBook)
        $("#viewModelNumber").val(macBook.modelNumber)
        $("#viewVariantName").val(macBook.variantName)
        $('#ViewProcessor').html('')
        $('#ViewMemory').html('')
        $('#ViewStorage').html('')
        $('#ViewIMG-label').html('')
        $('#ViewIMG-label').append(`
        <img src="../assets/${macBook.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">
        `)
        macBook.cpu.forEach(e => {
            /* 
            console.log(element.name)
            console.log(element.cores) 
            */
            $('#ViewProcessor')
                .append(`
           <input value="${e.name} (${e.cores} Cores)" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        })
        macBook.memory.forEach(e => {
            $('#ViewMemory')
                .append(`
           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        })
        macBook.storage.forEach(e => {
            $('#ViewStorage')
                .append(`
           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        })
    })
}
function register(event) {
    event.preventDefault();
    const file_data = $('#RegisterIMG').prop('files')[0];
    const form = new FormData(document.getElementById("REGISTERFORM"))
    form.append('file', file_data)
    $.ajax({
        url: './include/request.php', // <-- point to server-side PHP script 
        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form,
        type: 'post'
    }).done((data) => {
        //console.log(data)
        alert(data)
        location.reload()
    })
}
function update(event) {
    event.preventDefault();
    const file_data = $('#EditIMG').prop('files')[0];
    const form = new FormData(document.getElementById("UPDATEFORM"))
    form.append('file', file_data)
    $.ajax({
        url: './include/request.php', // <-- point to server-side PHP script 
        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form,
        type: 'post'
    }).done((data) => {
        //console.log(data)
        alert(data)
        location.reload()
    })
}
export { viewCard, viewEdit, register, update }