//import $ from 'jquery'
//import 'bootstrap/dist/js/bootstrap.esm.min'
function viewCard(modelNumber) {
    let params = `?viewCard=true`
    params += `&modelNumber=${modelNumber}`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {
    }).done((data) => {
        const json = JSON.parse(data)
        const macBook = json.macBook
        $("#viewModelNumber").val(macBook.modelNumber)
        $("#viewVariantName").val(macBook.variantName)
        macBook.cpu.forEach(e => {
            /* 
            console.log(element.name)
            console.log(element.cores) 
            */
           $('#ViewProcessor')
           .append(`
           <input value="${e.name} (${e.cores} Cores)" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        });
        macBook.memory.forEach(e =>{
            $('#ViewMemory')
            .append(`
           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        })
        macBook.storage.forEach(e =>{
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
    })
        .done((data) => {
            //console.log(data)
            location.reload()
        })
}
export { viewCard, register }