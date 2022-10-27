function numeromayor(){

var num1 = parseFloat(document.getElementById("cajanum1").value);
var num2 = parseFloat(document.getElementById("cajanum2").value);

if(num1>num2){
    alert("el numero 1 es mayor que es igual a " +num1)
}
else{
    alert("el numero 2 es mayor que es igual a " +num2)
}
}