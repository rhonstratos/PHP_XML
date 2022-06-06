import { newMemory, newProcessor, newStorage } from './register'
window.newCPU = newProcessor
window.newMemory = newMemory
window.newStorage = newStorage

//open register modal
window.$("#RegisterIMG").on("change", (event) => {
    $('#RegisterIMG-label').html(`
        <img src="${URL.createObjectURL(event.target.files[0])}" alt="..." style="object-fit: cover;" class="w-100 h-100">
    `)
})

import { callToast } from "./main";
window.callToast = callToast

import { register, setURL, viewCard } from './ajax.class'
window.setURL = setURL
window.viewCard = viewCard
window.register = register