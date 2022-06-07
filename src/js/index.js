import '../scss/app'
import 'bootstrap';
import '@popperjs/core'
import { newMemory, newProcessor, newStorage, replaceIMG } from './register'
import { callToast } from "./main";
import { setURL, viewCard, register } from './ajax.class'

var $ = require("jquery")
window.jQuery = $
window.$ = $
$("#RegisterIMG").on("change", replaceIMG)
$("#REGISTERFORM").on("submit", register)

window.newCPU = newProcessor
window.newMemory = newMemory
window.newStorage = newStorage
window.callToast = callToast
window.setURL = setURL
window.viewCard = viewCard