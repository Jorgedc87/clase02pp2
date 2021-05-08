<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: -1001px; 
  width: 100px;
}
</style>

<form action="ejercicio14.php" method="post">
    <label for="">Temperatura:</label>
    <input type="number" name="valor" placeholder="Ingrese la temperatura" required>
    <br><br>
    <label for="">¿A que quiere convertir? (C o F)</label>
    <input type="text" name="conver" placeholder="C o F" required>
    <input type="submit" value="Enviar">
    <br><br>
    
</form>

<?php 

/* Autor: Jorge Calderón

De Farenheit a Celsius: C = (F – 32) / 1,8 
De Celsius a Farenheit: F = (1,8) x C + 32


*/

$_SERVER['REMOTE_ADDR'];

function cel_a_far($celc){
    return ( 1.8 * $celc + 32);
}

function far_a_cel($fahre){
    return (($fahre - 32) / 1.8);
     
}

function transformar($valor,$conversion){
    switch($conversion){
        case "c":
        case "C":
            $resultado = (round(far_a_cel($valor), 2) . "° Celcius");
            break;
        case "f":
        case "F":
            $resultado = (round(cel_a_far($valor), 2) . "° Fahrenheit");
            break;
        default:
            $resultado = "No seleccionó opción correcta";
            break;
    }
    mostrarTemperatura($resultado);
}

function mostrarTemperatura($resultado){
    echo "<h1>$resultado </h1>";
}

if(isset($_POST['valor'])){
    $valor = $_POST['valor'];
    $conver = $_POST['conver'];
    
    transformar($valor,$conver);
}

echo "<br><br>";

var_dump($_SERVER);

?>