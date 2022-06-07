//import $ from 'jquery'
//import 'bootstrap/dist/js/bootstrap.esm.min'
function viewCard(modelNumber) {
    let params = `?viewCard=true`
    params += `&modelNumber=${modelNumber}`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {
        
    }).done((data)=>{
        
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