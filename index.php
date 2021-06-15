<?php 
#declaramos una funcion 
function hola (){
    echo "Biemvenido";  
}
#llamamos la funcion
hola();
echo "<br> <br>";
function despedida($bye){
    echo $bye;
}
#llamar a la funcion con parametro
despedida ("Hasta luego");
echo "<br> <br>";
#funcion con retorno 
function retorno($retornar){
    return $retornar;
}
echo retorno("Retornar a la universidad ");
#ejercicios 
#Funcion con retorno
echo "<br> <br>";
function multiplicar($num1,$num2){
    $respuesta=$num1*$num2;
    echo $respuesta;
}
    multiplicar(2,9);
#ejercicio con retorno
echo "<br> <br>";
function suma($n1,$n2){
    $respt = $n1+$n2;
    return $respt;
}
echo suma(30,45);
echo "<br> <br>";
#hotel
echo "Funciones Hotel";
echo "<br> <br>";
#funcion con retorno
function coste_hotel($nr_noches){
    $r=$nr_noches*90;
    return $r;
}
echo coste_hotel(7);
echo "<br> <br>";
#Funcion con parametro
function coste_hotel2($nr_noches){
    $r2=$nr_noches*90;
    echo $r2;
}
coste_hotel2(6);
#funcion sin parametro
echo "<br> <br>";
function coste_hotel3(){
    $r3=5*90;
    echo $r3;
}
coste_hotel3();
?>