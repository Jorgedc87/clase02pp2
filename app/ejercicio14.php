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

function cel_a_far($celc){
    return ( 1.8 * $celc + 32);
}

function far_a_cel($fahre){
    return (($fahre - 32) / 1.8);
     
}

function transformar($valor,$conversion){
    switch($conversion){
        case "c":
            $resultado = far_a_cel($valor);
            break;
        case "f":
            $resultado = cel_a_far($valor);
            break;
        default:
            $resultado = "No seleccionó opción correcta";
            break;
    }
    mostrarTemperatura($resultado);
}

function mostrarTemperatura($resultado){
    echo "<h1>Ejercicio número: 14</h1>";
    echo $resultado;
    echo "<h4>Autor: Jorge Calderón</h4>";
}

if(isset($_POST['valor'])){
    $valor = $_POST['valor'];
    $conver = $_POST['conver'];
    
    transformar($valor,$conver);
}



?>