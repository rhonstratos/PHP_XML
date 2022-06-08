/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack:///./src/scss/app.scss?");

/***/ }),

/***/ "./src/js/ajax.class.js":
/*!******************************!*\
  !*** ./src/js/ajax.class.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"register\": () => (/* binding */ register),\n/* harmony export */   \"update\": () => (/* binding */ update),\n/* harmony export */   \"viewCard\": () => (/* binding */ viewCard),\n/* harmony export */   \"viewEdit\": () => (/* binding */ viewEdit)\n/* harmony export */ });\n//import $ from 'jquery'\r\n//import 'bootstrap/dist/js/bootstrap.esm.min'\r\nfunction viewEdit(modelNumber) {\r\n    let params = `?requestNode=true`\r\n    params += `&modelNumber=${modelNumber}`\r\n    const _url = `./include/request.php${params}`\r\n    $.get(_url, (data, status) => {\r\n    }).done((data) => {\r\n        const json = JSON.parse(data)\r\n        const macBook = json.macBook\r\n        $(\"#editModelNumber\").val(macBook.modelNumber)\r\n        $(\"#editVariantName\").val(macBook.variantName)\r\n        $('#EditProcessor').html('')\r\n        $('#EditMemory').html('')\r\n        $('#EditStorage').html('')\r\n        $('#EditIMG-label').html('')\r\n        //console.log(macBook)\r\n        $('#EditIMG-label').append(`\r\n        <img src=\"../assets/${macBook.img}\" alt=\"...\" style=\"object-fit: cover;\" class=\"w-100 h-100\">\r\n        `)\r\n        macBook.cpu.forEach(e => {\r\n            $('#EditProcessor')\r\n                .append(`\r\n            <div class=\"input-group\">\r\n                <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"processor[]\" id=\"processor\">\r\n                    <option value=\"${e.name}|${e.cores}\" disabled selected>${e.name} (${e.cores} Cores)</option>\r\n                    <option value=\"Apple M1|8\">Apple M1 (8 Cores)</option>\r\n                    <option value=\"Apple M1 Pro|10\">Apple M1 Pro (10 Cores)</option>\r\n                    <option value=\"Apple M1 Max|10\">Apple M1 Max (10 Cores)</option>\r\n                    <option value=\"Intel Core i5|2\">Intel Core i5 (2 Cores)</option>\r\n                    <option value=\"Intel Core i5|4\">Intel Core i5 (4 Cores)</option>\r\n                    <option value=\"Intel Core i7|2\">Intel Core i7 (2 Cores)</option>\r\n                    <option value=\"Intel Core i7|4\">Intel Core i7 (4 Cores)</option>\r\n                    <option value=\"Intel Core i7|6\">Intel Core i7 (6 Cores)</option>\r\n                    <option value=\"Intel Core i9|8\">Intel Core i9 (8 Cores)</option>\r\n                </select>\r\n                <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newCPU()\">+</button>\r\n            </div>\r\n            `)\r\n        })\r\n        macBook.memory.forEach(e => {\r\n            $('#EditMemory')\r\n                .append(`\r\n            <div class=\"input-group\">\r\n                <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"memoryCapacity[]\" id=\"memoryCapacity\">\r\n                    <option value=\"${e.value}\" disabled selected>${e.value}</option>\r\n                    <option value=\"4 GB\">4 GB</option>\r\n                    <option value=\"8 GB\">8 GB</option>\r\n                    <option value=\"16 GB\">16 GB</option>\r\n                    <option value=\"32 GB\">32 GB</option>\r\n                    <option value=\"64 GB\">64 GB</option>\r\n                </select>\r\n                <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newMemory();\">+</button>\r\n            </div>\r\n            `)\r\n        })\r\n        macBook.storage.forEach(e => {\r\n            $('#EditStorage')\r\n                .append(`\r\n            <div class=\"input-group\">\r\n                <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"storageCapacity[]\" id=\"storageCapacity\">\r\n                    <option value=\"${e.value}\" disabled selected>${e.value}</option>\r\n                    <option value=\"256GB SSD\">256GB SSD</option>\r\n                    <option value=\"512GB SSD\">512GB SSD</option>\r\n                    <option value=\"1TB SSD\">1TB SSD</option>\r\n                    <option value=\"2TB SSD\">2TB SSD</option>\r\n                    <option value=\"4TB SSD\">4TB SSD</option>\r\n                    <option value=\"8TB SSD\">8TB SSD</option>\r\n                </select>\r\n                <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newStorage();\">+</button>\r\n            </div>\r\n            `)\r\n        })\r\n    })\r\n}\r\nfunction viewCard(modelNumber) {\r\n    let params = `?requestNode=true`\r\n    params += `&modelNumber=${modelNumber}`\r\n    const _url = `./include/request.php${params}`\r\n    $.get(_url, (data, status) => {\r\n    }).done((data) => {\r\n        const json = JSON.parse(data)\r\n        const macBook = json.macBook\r\n        //console.log(macBook)\r\n        $(\"#viewModelNumber\").val(macBook.modelNumber)\r\n        $(\"#viewVariantName\").val(macBook.variantName)\r\n        $('#ViewProcessor').html('')\r\n        $('#ViewMemory').html('')\r\n        $('#ViewStorage').html('')\r\n        $('#ViewIMG-label').html('')\r\n        $('#ViewIMG-label').append(`\r\n        <img src=\"../assets/${macBook.img}\" alt=\"...\" style=\"object-fit: cover;\" class=\"w-100 h-100\">\r\n        `)\r\n        macBook.cpu.forEach(e => {\r\n            /* \r\n            console.log(element.name)\r\n            console.log(element.cores) \r\n            */\r\n            $('#ViewProcessor')\r\n                .append(`\r\n           <input value=\"${e.name} (${e.cores} Cores)\" readonly=\"readonly\" class=\"text-center form-control input-secondary rounded-10 border-none\">\r\n           `)\r\n        })\r\n        macBook.memory.forEach(e => {\r\n            $('#ViewMemory')\r\n                .append(`\r\n           <input value=\"${e.value}\" readonly=\"readonly\" class=\"text-center form-control input-secondary rounded-10 border-none\">\r\n           `)\r\n        })\r\n        macBook.storage.forEach(e => {\r\n            $('#ViewStorage')\r\n                .append(`\r\n           <input value=\"${e.value}\" readonly=\"readonly\" class=\"text-center form-control input-secondary rounded-10 border-none\">\r\n           `)\r\n        })\r\n    })\r\n}\r\nfunction register(event) {\r\n    event.preventDefault();\r\n    const file_data = $('#RegisterIMG').prop('files')[0];\r\n    const form = new FormData(document.getElementById(\"REGISTERFORM\"))\r\n    form.append('file', file_data)\r\n    $.ajax({\r\n        url: './include/request.php', // <-- point to server-side PHP script \r\n        dataType: 'text',  // <-- what to expect back from the PHP script, if anything\r\n        cache: false,\r\n        contentType: false,\r\n        processData: false,\r\n        data: form,\r\n        type: 'post'\r\n    }).done((data) => {\r\n        //console.log(data)\r\n        //alert(data)\r\n        location.href = './?registered=true'\r\n    }).fail((data)=>{\r\n        location.href = './?registered=false'\r\n    })\r\n}\r\nfunction update(event) {\r\n    event.preventDefault();\r\n    const file_data = $('#EditIMG').prop('files')[0];\r\n    const form = new FormData(document.getElementById(\"UPDATEFORM\"))\r\n    form.append('file', file_data)\r\n    $.ajax({\r\n        url: './include/request.php', // <-- point to server-side PHP script \r\n        dataType: 'text',  // <-- what to expect back from the PHP script, if anything\r\n        cache: false,\r\n        contentType: false,\r\n        processData: false,\r\n        data: form,\r\n        type: 'post'\r\n    }).done((data) => {\r\n        //console.log(data)\r\n        alert(data)\r\n        location.href = './?updated=true'\r\n    }).fail((data)=>{\r\n        location.href = './?updated=false'\r\n    })\r\n}\r\n\n\n//# sourceURL=webpack:///./src/js/ajax.class.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_app__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/app */ \"./src/scss/app.scss\");\n/* harmony import */ var _register__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./register */ \"./src/js/register.js\");\n/* harmony import */ var _main__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./main */ \"./src/js/main.js\");\n/* harmony import */ var _ajax_class__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./ajax.class */ \"./src/js/ajax.class.js\");\n//import 'jquery'\r\n//import '@popperjs/core'\r\n//import 'bootstrap/dist/js/bootstrap.esm.min'\r\n\r\n\r\n\r\n\r\n\r\nwindow.newCPU = _register__WEBPACK_IMPORTED_MODULE_1__.newProcessor\r\nwindow.newMemory = _register__WEBPACK_IMPORTED_MODULE_1__.newMemory\r\nwindow.newStorage = _register__WEBPACK_IMPORTED_MODULE_1__.newStorage\r\nwindow.callToast = _main__WEBPACK_IMPORTED_MODULE_2__.callToast\r\nwindow.viewCard = _ajax_class__WEBPACK_IMPORTED_MODULE_3__.viewCard\r\nwindow.viewEdit = _ajax_class__WEBPACK_IMPORTED_MODULE_3__.viewEdit\r\nwindow.replaceIMG = _register__WEBPACK_IMPORTED_MODULE_1__.replaceIMG\r\n//$(\"#RegisterIMG\").on(\"change\", replaceIMG)\r\n$(\"#REGISTERFORM\").on(\"submit\", _ajax_class__WEBPACK_IMPORTED_MODULE_3__.register)\r\n$(\"#UPDATEFORM\").on(\"submit\", _ajax_class__WEBPACK_IMPORTED_MODULE_3__.update)\n\n//# sourceURL=webpack:///./src/js/index.js?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"callToast\": () => (/* binding */ callToast)\n/* harmony export */ });\nfunction callToast() {\r\n\tconst option = {\r\n\t\tanimation: true,\r\n\t\tautohide: true,\r\n\t\tdelay: 3000\r\n\t};\r\n\tconst toastElList = [].slice.call(\r\n\t\tdocument.querySelectorAll('.toast')\r\n\t);\r\n\tconst toastList = toastElList.map((toastEl) => {\r\n\t\treturn new bootstrap.Toast(toastEl, option)\r\n\t});\r\n\r\n\ttoastList.forEach(toast => toast.show());\r\n}\r\n\r\n\n\n//# sourceURL=webpack:///./src/js/main.js?");

/***/ }),

/***/ "./src/js/register.js":
/*!****************************!*\
  !*** ./src/js/register.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"newMemory\": () => (/* binding */ newMemory),\n/* harmony export */   \"newProcessor\": () => (/* binding */ newProcessor),\n/* harmony export */   \"newStorage\": () => (/* binding */ newStorage),\n/* harmony export */   \"replaceIMG\": () => (/* binding */ replaceIMG)\n/* harmony export */ });\nfunction newProcessor(id) {\r\n    const node = $(`#${id}`)\r\n    node.append(`\r\n    <div class=\"input-group\">\r\n        <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"processor[]\" id=\"processor\">\r\n            <option value=\"\" disabled selected>Processor Options</option>\r\n            <option value=\"Apple M1|8\">Apple M1 (8 Cores)</option>\r\n            <option value=\"Apple M1 Pro|10\">Apple M1 Pro (10 Cores)</option>\r\n            <option value=\"Apple M1 Max|10\">Apple M1 Max (10 Cores)</option>\r\n            <option value=\"Intel Core i5|2\">Intel Core i5 (2 Cores)</option>\r\n            <option value=\"Intel Core i5|4\">Intel Core i5 (4 Cores)</option>\r\n            <option value=\"Intel Core i7|2\">Intel Core i7 (2 Cores)</option>\r\n            <option value=\"Intel Core i7|4\">Intel Core i7 (4 Cores)</option>\r\n            <option value=\"Intel Core i7|6\">Intel Core i7 (6 Cores)</option>\r\n            <option value=\"Intel Core i9|8\">Intel Core i9 (8 Cores)</option>\r\n        </select>\r\n        <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newCPU()\">+</button>\r\n    </div>`)\r\n}\r\nfunction newMemory(id) {\r\n    const node = $(`#${id}`)\r\n    node.append(`\r\n    <div class=\"input-group\">\r\n        <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"memoryCapacity[]\" id=\"memoryCapacity\">\r\n            <option value=\"\" disabled selected>Memory Options</option>\r\n            <option value=\"4 GB\">4 GB</option>\r\n            <option value=\"8 GB\">8 GB</option>\r\n            <option value=\"16 GB\">16 GB</option>\r\n            <option value=\"32 GB\">32 GB</option>\r\n            <option value=\"64 GB\">64 GB</option>\r\n        </select>\r\n        <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newMemory();\">+</button>\r\n    </div>`)\r\n}\r\nfunction newStorage(id) {\r\n    const node = $(`#${id}`)\r\n    node.append(`\r\n    <div class=\"input-group\">\r\n        <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"storageCapacity[]\" id=\"storageCapacity\">\r\n            <option value=\"\" disabled selected>Storage Options</option>\r\n            <option value=\"256GB SSD\">256GB SSD</option>\r\n            <option value=\"512GB SSD\">512GB SSD</option>\r\n            <option value=\"1TB SSD\">1TB SSD</option>\r\n            <option value=\"2TB SSD\">2TB SSD</option>\r\n            <option value=\"4TB SSD\">4TB SSD</option>\r\n            <option value=\"8TB SSD\">8TB SSD</option>\r\n        </select>\r\n        <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newStorage();\">+</button>\r\n    </div>`)\r\n}\r\nfunction replaceIMG(id) {\r\n    $(`#${id}-label`).html(`\r\n        <img src=\"${URL.createObjectURL(event.target.files[0])}\" alt=\"...\" style=\"object-fit: cover;\" class=\"w-100 h-100\">\r\n    `)\r\n}\r\n\n\n//# sourceURL=webpack:///./src/js/register.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;