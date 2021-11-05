var cantidad = parseInt(document.getElementById("cantidad").value);
var categoria = parseInt(document.getElementById("categoria").value);
var btnBorrar = document.getElementById("resumen");
// var precioPagar = document.getElementById("precioPagar");

btnBorrar.addEventListener("click", () => {
  var total = 200 * cantidad;
  var descuento = (total * categoria) / 100;
  document.getElementById("precioPagar").innerText = total - descuento;
});

function descuento() {
  let t = 200 * cantidad;
  let d = (t * categoria) / 100;
  return d;
}

function resumen() {
  document.getElementById("precioPagar").innerHTML = descuento();
}

// function alert(message, type) {
//   var wrapper = document.createElement("div");
//   wrapper.innerHTML =
//     '<div class="alert alert-' +
//     type +
//     ' alert-dismissible" role="alert">' +
//     message +
//     '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

//   alertPlaceholder.append(wrapper);
// }

// if (alertTrigger) {
//   alertTrigger.addEventListener("click", function () {
//     alert("Nice, you triggered this alert message!", "success");
//   });
// }
