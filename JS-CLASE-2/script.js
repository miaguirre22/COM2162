/**
 * Funcion que permita ingresar cantidad de horas trabajadas por semana (entre 0 y 40)
 * y el v alor a pagar por hora (entre 10 y 15), Calcule el pago a recibir al mes.
 * Si el sueldo mensual es menor a $1000 recibira un bono de 10% del sueldo,
 * si el sueldo mensual es %1000 o mas recibira un bono de 15% del sueldo.
 * Visualizar el sueldo a recibir.
 */

function calcularSueldo(horasTrabajadas, pagoPorHora) {
  let horasMes = horasTrabajadas * 4;
  let pagoMes = horasMes * pagoPorHora;
  let bono;

  // si el sueldo es menor a 1000 recibira bono de 15%
  if (pagoMes < 1000) {
    console.log("Sueldo menor a $1000: ", pagoMes);
    bono = pagoMes * 0.1;
    console.log("Bono: ", bono);
  }
  //Si el sueldo es igual o menor a 100 recibira un bono de 15%
  if (pagoMes >= 1000) {
    console.log("Sueldo igual o mayor a $1000: ", pagoMes);
    bono = pagoMes * 0.15;
    console.log("Bono: ", bono);
  }
  //Mostrar el sueldo a recibir
  console.log("Sueldo: ", pagoMes + bono);
}

calcularSueldo(10, 100);

/**
 * Desarrollar la funcion que reciba un numero entero y devuelva la
 * tabla de multiplicar de ese numero como cadena de caracteres.
 */

function tablaDeMultiplicar(numero) {
  let tabla = '\n';

  for (let index = 1; index < 11; index++) {
    tabla += String(index) + ' x ' + String(numero) + ' = ' + String(index * numero) + "\n";
  }
  console.log("Numero: ", numero)
  console.log("Tabla: ", tabla)
}

tablaDeMultiplicar(9)