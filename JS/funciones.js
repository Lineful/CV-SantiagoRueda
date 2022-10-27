function calcularvelocidad(){ 
var distancia = parseFloat(document.getElementById("cajadistancia").value);

var tiempo = parseFloat(document.getElementById("cajatiempo").value);

var velocidad = distancia/tiempo;

alert("la velocidad a la que usted recorrio en km/h es =" +velocidad);

}