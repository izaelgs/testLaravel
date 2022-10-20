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
/*!************************************!*\
  !*** ./resources/js/proponente.js ***!
  \************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
var server = '35.247.209.51';
init_colaborador(server);
function init_colaborador(server) {
  var form = document.querySelector('#f_proponente');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    $('.is-invalid').removeClass('is-invalid');
    var type = $('[name="form-type"]').val();
    var campos = $('#f_proponente').serializeArray();
    var data = {};
    $.map(campos, function (n, i) {
      if (n['name'] !== 'form-type') {
        data[n['name']] = n['value'];
      }
    });

    // console.log(type);

    $.ajax({
      url: "http://".concat(server, "/api/").concat(type),
      method: "post",
      data: data,
      dataType: "json"
    }).then(function (data) {
      $('#f_proponente')[0].reset();
      appendToast('Cadastro Concluído com sucesso', 'success').then(function (element) {
        var toast = new bootstrap.Toast(element);
        toast.show();
      });
    })["catch"](function (data) {
      data = data.responseJSON.errors;
      if (Object.keys(data).length) {
        for (var erro in data) {
          console.log(erro);
          $("[name=\"".concat(erro, "\"")).addClass('is-invalid');
        }
      } else {
        appendToast('Algo de errado não está certo', 'danger').then(function (element) {
          var toast = new bootstrap.Toast(element);
          toast.show();
        });
      }
    });
  });
}
$('[name="form-type"]').change(function (e) {
  var hiddenables = $('[hiddenable]');
  hiddenables.prop("disabled", true);
  hiddenables.addClass("hidden");
  $("[".concat(e.target.value, "]")).prop("disabled", false);
  $("[".concat(e.target.value, "]")).removeClass("hidden");
  console.log($("[".concat(e.target.value, "]")));
});
function appendToast(mensagem, status, server) {
  return new Promise(function (resolve, reject) {
    var toast = document.createElement('div');
    toast.classList.add('toast', "bg-".concat(status));
    toast.id = 'liveToast';
    toast.role = "alert";
    toast.setAttribute('aria-live', "assertive");
    toast.setAttribute('aria-atomic', "true");
    toast.innerHTML = "\n                    <div class=\"toast-header  bg-dark\">\n                        <strong class=\"me-auto\">Unitech</strong>\n                        <small>Agora</small>\n                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>\n                    </div>\n                    <div class=\"toast-body\">\n                        ".concat(mensagem, "\n                    </div>");
    document.querySelector('.toast-container').append(toast);
    resolve(toast);
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (init_colaborador);
/******/ })()
;