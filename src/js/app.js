import 'bootstrap'
import '../scss/app';
import { addCpu, addMemory, addStorage, callToast } from './main';

window.addCpu = addCpu
window.addMemory = addMemory
window.addStorage = addStorage
window.callToast = callToast

var $ = require("jquery");
window.jQuery = $;
window.$ = $;

$(".test").on("click",()=>{

})