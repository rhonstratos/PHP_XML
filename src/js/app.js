import '../scss/app'
import 'bootstrap';
import '@popperjs/core'
import { addCpu, addMemory, addStorage, callToast } from './main';
import { newMemory, newProcessor, newStorage } from './register';

window.addCpu = addCpu
window.addMemory = addMemory
window.addStorage = addStorage
window.callToast = callToast

window.newCPU = newProcessor
window.newMemory = newMemory
window.newStorage =  newStorage
var $ = require("jquery");
window.jQuery = $;
window.$ = $;

$(".test").on("click",()=>{

})