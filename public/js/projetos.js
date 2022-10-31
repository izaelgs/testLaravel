/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
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
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/projetos.js ***!
  \**********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
var server = '35.247.209.51';
appendProjects($('#projetos'), server);
$('[name="form-type"]').change(function (e) {
  var hiddenables = $('[hiddenable]');
  hiddenables.prop("disabled", true);
  hiddenables.addClass("hidden");
  $("[".concat(e.target.value, "]")).prop("disabled", false);
  $("[".concat(e.target.value, "]")).removeClass("hidden");
});
function appendProjects(input, server) {
  var params = input.attr('params');
  $.ajax({
    url: "http://".concat(server, "/api/projeto/?conditions=").concat(params),
    dataType: "json"
  }).then(function (data) {
    var items = data.current_page ? data.data : data;
    items.forEach(function (item) {
      appendToast(input, item.titulo, item.descricao);

      // let option = document.createElement('option');

      // option.value = item.id;
      // option.append(item.titulo);
      // if (item.periodos) option.setAttribute('periodos', item.periodos);

      // input.append(option);
    });
  });
}

function appendToast(input, title, text) {
  var col = document.createElement('div');
  var card = document.createElement('div');
  var card_body = document.createElement('div');
  var card_title = document.createElement('h5');
  var card_text = document.createElement('p');
  col.classList.add('col-md-4');
  card.classList.add('card', 'bg-dark');
  card_body.classList.add('card-body');
  card_title.classList.add('card-title');
  card_text.classList.add('card-text');
  card_title.append(title);
  card_text.append(text);
  col.append(card);
  card.append(card_body);
  card_body.append(card_title);
  card_body.append(card_text);
  input.append(col);
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (appendProjects);
/******/ })()
;