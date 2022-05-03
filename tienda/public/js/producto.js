/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/producto.js ***!
  \**********************************/
var setProducto = document.getElementById("producto");
var idProducto = document.getElementById("descripcion");

if (idProducto != null) {
  idProducto.addEventListener("click", function () {
    console.log('object + ' + idProducto.value);
    setProducto.innerText = idProducto.value;
  });
}

Livewire.on('producto-cambiado', function () {
  alert('f');
});
/******/ })()
;