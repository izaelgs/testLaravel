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
/*!***********************************!*\
  !*** ./resources/js/estudante.js ***!
  \***********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function init_estudante(server) {
  var form = document.querySelector('#f_estudante');
  appendOptions(form.curso, 'cursos', server);
  appendOptions(form.projeto, 'projeto', server);
  appendOptions(form.area_interesse, 'areaAP', server);
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    $('.is-invalid').removeClass('is-invalid');
    var data = {
      "curso": form.curso.value,
      "nome_completo": form.nome_completo.value,
      "email": form.email.value,
      "endereco": form.endereco.value,
      "registro_academico": form.registro_academico.value,
      "periodo": form.periodo.value,
      "forma_integracao": form.forma_integracao.value,
      "area_interesse": form.area_interesse.value,
      "projeto": form.projeto.value
    };
    $.ajax({
      url: "http://".concat(server, "/api/estudante"),
      method: "post",
      data: data,
      dataType: "json"
    }).then(function (data) {
      $('#f_estudante')[0].reset();
      appendToast('Cadastro Concluído com sucesso', 'success').then(function (element) {
        var toast = new bootstrap.Toast(element);
        toast.show();
      });
    })["catch"](function (data) {
      data = data.responseJSON.errors;
      if (Object.keys(data).length) {
        for (var erro in data) {
          document.querySelector("#".concat(erro)).classList.add('is-invalid');
        }
      } else {
        appendToast('Algo de errado não está certo', 'danger').then(function (element) {
          var toast = new bootstrap.Toast(element);
          toast.show();
        });
      }
    });
  });
  form.curso.addEventListener('change', function (e) {
    var periodos = form.curso.options[form.curso.selectedIndex].getAttribute('periodos');
    form.periodo.setAttribute('max', periodos);
    if (form.periodo.value > periodos) form.periodo.value = periodos;
  });
}
function appendOptions(input, route, server) {
  $.ajax({
    url: "http://".concat(server, "/api/").concat(route),
    dataType: "json"
  }).then(function (data) {
    var items = data.current_page ? data.data : data;
    items.forEach(function (item) {
      var option = document.createElement('option');
      option.value = item.id;
      option.append(item.titulo);
      if (item.periodos) option.setAttribute('periodos', item.periodos);
      input.append(option);
    });
  });
}
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (init_estudante);
/******/ })()
;