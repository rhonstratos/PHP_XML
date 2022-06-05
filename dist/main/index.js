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

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _register__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./register */ \"./src/js/register.js\");\n\r\nwindow.newCPU = _register__WEBPACK_IMPORTED_MODULE_0__.newProcessor\r\nwindow.newMemory = _register__WEBPACK_IMPORTED_MODULE_0__.newMemory\r\nwindow.newStorage = _register__WEBPACK_IMPORTED_MODULE_0__.newStorage\r\n\r\nwindow.$(\"#RegisterIMG\").on(\"change\",(event)=>{\r\n    $('#RegisterIMG-label').html(`\r\n        <img src=\"${URL.createObjectURL(event.target.files[0])}\" alt=\"...\" style=\"object-fit: cover;\" class=\"w-100 h-100\">\r\n    `)\r\n})\n\n//# sourceURL=webpack:///./src/js/index.js?");

/***/ }),

/***/ "./src/js/register.js":
/*!****************************!*\
  !*** ./src/js/register.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"newMemory\": () => (/* binding */ newMemory),\n/* harmony export */   \"newProcessor\": () => (/* binding */ newProcessor),\n/* harmony export */   \"newStorage\": () => (/* binding */ newStorage)\n/* harmony export */ });\nfunction newProcessor() {\r\n    const node = $(\"#RegisterProcessor\")\r\n    node.append(`\r\n    <div class=\"input-group\">\r\n        <input type=\"text\" name=\"cpuName[]\" required=\"required\" id=\"cpuName\" class=\"form-control input-secondary border-none text-center rounded-10-start\" placeholder=\"Name\"></input>\r\n        <input type=\"number\" name=\"cpuCores[]\" required=\"required\" id=\"cpuCores\" class=\"form-control input-secondary border-none text-center\" placeholder=\"Core Count\"></input>\r\n        <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newCPU();\">+</button>\r\n    </div>`)\r\n}\r\nfunction newMemory() {\r\n    const node = $(\"#RegisterMemory\")\r\n    node.append(`\r\n    <div class=\"input-group\">\r\n        <input type=\"number\" name=\"memoryCapacity[]\" required=\"required\" id=\"memoryCapacity\" class=\"form-control input-secondary border-none text-center rounded-10-start\" placeholder=\"Capacity\"></input>\r\n        <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"memoryUnit[]\" id=\"memoryUnit\">\r\n            <option value=\"GB\">GB</option>\r\n            <option value=\"TB\">TB</option>\r\n        </select>\r\n        <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newMemory();\">+</button>\r\n    </div>`)\r\n}\r\nfunction newStorage() {\r\n    const node = $(\"#RegisterStorage\")\r\n    node.append(`\r\n    <div class=\"input-group\">\r\n        <input type=\"number\" name=\"storageCapacity[]\" required=\"required\" id=\"storageCapacity\" class=\"form-control input-secondary border-none text-center rounded-10-start\" placeholder=\"Capacity\"></input>\r\n        <select class=\"form-control input-secondary border-none text-center\" required=\"required\" name=\"storageUnit[]\" id=\"storageUnit\">\r\n            <option value=\"TB\">TB</option>\r\n            <option value=\"GB\">GB</option>\r\n        </select>\r\n        <button class=\"btn btn-success rounded-10-end\" type=\"button\" onclick=\"newStorage();\">+</button>\r\n    </div>`)\r\n}\r\n\n\n//# sourceURL=webpack:///./src/js/register.js?");

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