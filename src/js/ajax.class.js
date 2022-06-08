//import $ from 'jquery'
//import 'bootstrap/dist/js/bootstrap.esm.min'
import { newProcessorWithKey, newMemoryWithKey, newStorageWithKey } from './register.js'
function loadSuggestion() {
    let params = `?requestSuggestions=true`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {

    }).done((data) => {
        console.log(data)
        const json = JSON.parse(data)
        console.log(json)
        let suggestionArray = []
        $.each(json.suggestions.val, (key,value)=>{
            suggestionArray.push(value)
        })
        $('#searchSuggest').autocomplete({
            source: suggestionArray
        })
    })
}
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
        <img src="../assets/img/${macBook.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">
        `)
        let count = 0

        macBook.cpu.forEach(e => {
            newProcessorWithKey('EditProcessor', `${e.name}|${e.cores}`, `${e.name} (${e.cores} Cores)`, `${count != 0 ? count : ''}`)
            count++
        })
        count = 0
        macBook.memory.forEach(e => {
            newMemoryWithKey('EditMemory', `${e.value}`, `${e.value}`, `${count != 0 ? count : ''}`)
            count++
        })
        count = 0
        macBook.storage.forEach(e => {
            newStorageWithKey('EditStorage', `${e.value}`, `${e.value}`, `${count != 0 ? count : ''}`)
            count++
        })
        count = 0
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
        <img src="../assets/img/${macBook.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">
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
function viewDelete(modelNumber) {
    let params = `?requestNode=true`
    params += `&modelNumber=${modelNumber}`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {
    }).done((data) => {
        const json = JSON.parse(data)
        const macBook = json.macBook
        //console.log(macBook)
        $("#DeleteModelNumber").val(macBook.modelNumber)
        $("#DeleteVariantName").val(macBook.variantName)
        $('#DeleteProcessor').html('')
        $('#DeleteMemory').html('')
        $('#DeleteStorage').html('')
        $('#DeleteIMG-label').html('')
        $('#DeleteIMG-label').append(`
        <img src="../assets/img/${macBook.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">
        `)
        macBook.cpu.forEach(e => {
            $('#DeleteProcessor')
                .append(`
           <input value="${e.name} (${e.cores} Cores)" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        })
        macBook.memory.forEach(e => {
            $('#DeleteMemory')
                .append(`
           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">
           `)
        })
        macBook.storage.forEach(e => {
            $('#DeleteStorage')
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
        //alert(data)
        location.href = './?registered=true'
    }).fail((data) => {
        location.href = './?registered=false'
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
        //alert(data)
        location.href = './?updated=true'
    }).fail((data) => {
        location.href = './?updated=false'
    })
}
function deleteNode(event) {
    event.preventDefault()
    const val = $('#DeleteModelNumber').val()
    $.post("./include/request.php",
        {
            delete: true,
            modelNumber: val
        }, () => {

        }).done((data) => {
            //console.log(data)
            alert(data)
            location.href = './?deleted=true'
        }).fail((data) => {
            location.href = './?deleted=false'
        })
}
export { loadSuggestion, viewCard, viewDelete, viewEdit, register, update, deleteNode }