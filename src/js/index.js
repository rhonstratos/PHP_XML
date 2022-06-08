//import 'jquery'
//import '@popperjs/core'
//import 'bootstrap/dist/js/bootstrap.esm.min'
import '../scss/app'
import { newMemory, newProcessor, newStorage, replaceIMG } from './register'
import { callToast } from "./main";
import { viewCard, register, viewEdit, update, viewDelete, deleteNode } from './ajax.class'

window.newCPU = newProcessor
window.newMemory = newMemory
window.newStorage = newStorage
window.callToast = callToast
window.viewCard = viewCard
window.viewEdit = viewEdit
window.viewDelete = viewDelete
window.replaceIMG = replaceIMG
//$("#RegisterIMG").on("change", replaceIMG)
$("#REGISTERFORM").on("submit", register)
$("#UPDATEFORM").on("submit", update)
$('#dltBtn').on("click",deleteNode)