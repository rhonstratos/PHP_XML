(()=>{"use strict";window.newCPU=function(e){$(`#${e}`).append(`\n    <div class="input-group">\n        <select class="form-control input-secondary border-none text-center" required="required" name="${"EditProcessor"==e?"processorEdit":"processor"}[]" >\n            <option value="" disabled selected>Processor Options</option>\n            <option value="Apple M1|8">Apple M1 (8 Cores)</option>\n            <option value="Apple M1 Pro|10">Apple M1 Pro (10 Cores)</option>\n            <option value="Apple M1 Max|10">Apple M1 Max (10 Cores)</option>\n            <option value="Intel Core i5|2">Intel Core i5 (2 Cores)</option>\n            <option value="Intel Core i5|4">Intel Core i5 (4 Cores)</option>\n            <option value="Intel Core i7|2">Intel Core i7 (2 Cores)</option>\n            <option value="Intel Core i7|4">Intel Core i7 (4 Cores)</option>\n            <option value="Intel Core i7|6">Intel Core i7 (6 Cores)</option>\n            <option value="Intel Core i9|8">Intel Core i9 (8 Cores)</option>\n        </select>\n        <button class="btn btn-success rounded-10-end" type="button" onclick="newCPU('${e}')">+</button>\n    </div>`)},window.newMemory=function(e){$(`#${e}`).append(`\n    <div class="input-group">\n        <select class="form-control input-secondary border-none text-center" required="required" name="${"EditMemory"==e?"memoryCapacityEdit":"memoryCapacity"}[]" >\n            <option value="" disabled selected>Memory Options</option>\n            <option value="4 GB">4 GB</option>\n            <option value="8 GB">8 GB</option>\n            <option value="16 GB">16 GB</option>\n            <option value="32 GB">32 GB</option>\n            <option value="64 GB">64 GB</option>\n        </select>\n        <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory('${e}');">+</button>\n    </div>`)},window.newStorage=function(e){$(`#${e}`).append(`\n    <div class="input-group">\n        <select class="form-control input-secondary border-none text-center" required="required" name="${"EditStorage"===e?"storageCapacityEdit":"storageCapacity"}[]">\n            <option value="" disabled selected>Storage Options</option>\n            <option value="256GB SSD">256GB SSD</option>\n            <option value="512GB SSD">512GB SSD</option>\n            <option value="1TB SSD">1TB SSD</option>\n            <option value="2TB SSD">2TB SSD</option>\n            <option value="4TB SSD">4TB SSD</option>\n            <option value="8TB SSD">8TB SSD</option>\n        </select>\n        <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage('${e}');">+</button>\n    </div>`)},window.viewCard=function(e){let o="?requestNode=true";o+=`&modelNumber=${e}`;const n=`./include/request.php${o}`;$.get(n,((e,o)=>{})).done((e=>{const o=JSON.parse(e).macBook;$("#viewModelNumber").val(o.modelNumber),$("#viewVariantName").val(o.variantName),$("#ViewProcessor").html(""),$("#ViewMemory").html(""),$("#ViewStorage").html(""),$("#ViewIMG-label").html(""),$("#ViewIMG-label").append(`\n        <img src="../assets/img/${o.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">\n        `),o.cpu.forEach((e=>{$("#ViewProcessor").append(`\n           <input value="${e.name} (${e.cores} Cores)" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">\n           `)})),o.memory.forEach((e=>{$("#ViewMemory").append(`\n           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">\n           `)})),o.storage.forEach((e=>{$("#ViewStorage").append(`\n           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">\n           `)}))}))},window.viewEdit=function(e){let o="?requestNode=true";o+=`&modelNumber=${e}`;const n=`./include/request.php${o}`;$.get(n,((e,o)=>{})).done((e=>{const o=JSON.parse(e).macBook;$("#editModelNumber").val(o.modelNumber),$("#editVariantName").val(o.variantName),$("#EditProcessor").html(""),$("#EditMemory").html(""),$("#EditStorage").html(""),$("#EditIMG-label").html(""),$("#EditIMG-label").append(`\n        <img src="../assets/img/${o.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">\n        `);let n=0;o.cpu.forEach((e=>{var o,t,r,l;o="EditProcessor",t=`${e.name}|${e.cores}`,r=`${e.name} (${e.cores} Cores)`,l=`${0!=n?n:""}`,$(`#${o}`).append(`\n    <div class="input-group">\n        <select class="form-control input-secondary border-none text-center" required="required" name="processorEdit[${null!=l?l:""}]" >\n            <option value="${t}" selected="selected">${r}</option>\n            <option value="Apple M1|8">Apple M1 (8 Cores)</option>\n            <option value="Apple M1 Pro|10">Apple M1 Pro (10 Cores)</option>\n            <option value="Apple M1 Max|10">Apple M1 Max (10 Cores)</option>\n            <option value="Intel Core i5|2">Intel Core i5 (2 Cores)</option>\n            <option value="Intel Core i5|4">Intel Core i5 (4 Cores)</option>\n            <option value="Intel Core i7|2">Intel Core i7 (2 Cores)</option>\n            <option value="Intel Core i7|4">Intel Core i7 (4 Cores)</option>\n            <option value="Intel Core i7|6">Intel Core i7 (6 Cores)</option>\n            <option value="Intel Core i9|8">Intel Core i9 (8 Cores)</option>\n        </select>\n        <button class="btn btn-success rounded-10-end" type="button" onclick="newCPU('${o}')">+</button>\n    </div>`),n++})),n=0,o.memory.forEach((e=>{var o,t,r,l;o="EditMemory",t=`${e.value}`,r=`${e.value}`,l=`${0!=n?n:""}`,$(`#${o}`).append(`\n    <div class="input-group">\n        <select class="form-control input-secondary border-none text-center" required="required" name="memoryCapacityEdit[${null!=l?l:""}]">\n            <option value="${t}" selected>${r}</option>\n            <option value="4 GB">4 GB</option>\n            <option value="8 GB">8 GB</option>\n            <option value="16 GB">16 GB</option>\n            <option value="32 GB">32 GB</option>\n            <option value="64 GB">64 GB</option>\n        </select>\n        <button class="btn btn-success rounded-10-end" type="button" onclick="newMemory('${o}');">+</button>\n    </div>`),n++})),n=0,o.storage.forEach((e=>{var o,t,r,l;o="EditStorage",t=`${e.value}`,r=`${e.value}`,l=`${0!=n?n:""}`,$(`#${o}`).append(`\n    <div class="input-group">\n        <select class="form-control input-secondary border-none text-center" required="required" name="storageCapacityEdit[${null!=l?l:""}]">\n            <option value="${t}" selected>${r}</option>\n            <option value="256GB SSD">256GB SSD</option>\n            <option value="512GB SSD">512GB SSD</option>\n            <option value="1TB SSD">1TB SSD</option>\n            <option value="2TB SSD">2TB SSD</option>\n            <option value="4TB SSD">4TB SSD</option>\n            <option value="8TB SSD">8TB SSD</option>\n        </select>\n        <button class="btn btn-success rounded-10-end" type="button" onclick="newStorage('${o}');">+</button>\n    </div>`),n++})),n=0}))},window.viewDelete=function(e){let o="?requestNode=true";o+=`&modelNumber=${e}`;const n=`./include/request.php${o}`;$.get(n,((e,o)=>{})).done((e=>{const o=JSON.parse(e).macBook;$("#DeleteModelNumber").val(o.modelNumber),$("#DeleteVariantName").val(o.variantName),$("#DeleteProcessor").html(""),$("#DeleteMemory").html(""),$("#DeleteStorage").html(""),$("#DeleteIMG-label").html(""),$("#DeleteIMG-label").append(`\n        <img src="../assets/img/${o.img}" alt="..." style="object-fit: cover;" class="w-100 h-100">\n        `),o.cpu.forEach((e=>{$("#DeleteProcessor").append(`\n           <input value="${e.name} (${e.cores} Cores)" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">\n           `)})),o.memory.forEach((e=>{$("#DeleteMemory").append(`\n           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">\n           `)})),o.storage.forEach((e=>{$("#DeleteStorage").append(`\n           <input value="${e.value}" readonly="readonly" class="text-center form-control input-secondary rounded-10 border-none">\n           `)}))}))},window.replaceIMG=function(e){$(`#${e}-label`).html(`\n        <img src="${URL.createObjectURL(event.target.files[0])}" alt="..." style="object-fit: cover;" class="w-100 h-100">\n    `)},$("#REGISTERFORM").on("submit",(function(e){e.preventDefault();const o=$("#RegisterIMG").prop("files")[0],n=new FormData(document.getElementById("REGISTERFORM"));n.append("file",o),console.log(n),$.ajax({url:"./include/request.php",dataType:"text",cache:!1,contentType:!1,processData:!1,data:n,type:"post"}).done((e=>{location.href="./?registered=true"})).fail((e=>{location.href="./?registered=false"}))})),$("#UPDATEFORM").on("submit",(function(e){e.preventDefault();const o=$("#EditIMG").prop("files")[0],n=new FormData(document.getElementById("UPDATEFORM"));n.append("file",o),$.ajax({url:"./include/request.php",dataType:"text",cache:!1,contentType:!1,processData:!1,data:n,type:"post"}).done((e=>{location.href="./?updated=true"})).fail((e=>{location.href="./?updated=false"}))})),$("#dltBtn").on("click",(function(e){e.preventDefault();const o=$("#DeleteModelNumber").val();$.post("./include/request.php",{delete:!0,modelNumber:o},(()=>{})).done((e=>{location.href="./?deleted=true"})).fail((e=>{location.href="./?deleted=false"}))})),$(window).on("load",(function(){$.get("./include/request.php?requestSuggestions=true",((e,o)=>{})).done((e=>{const o=JSON.parse(e);let n=[];$.each(o.suggestions.val,((e,o)=>{n.push(o)})),$("#searchSuggest").autocomplete({source:n})}))}))})();