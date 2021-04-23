<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>

<?php

if (isset($_POST['edad'])){
    $edad = $_POST['edad'];
}
// $edad =  rand(1, 16);

if (!empty($edad)){
    switch($edad){
        case 1:
            $resultado = "es menor de edad";
            break; 
        case 2:
            $resultado = "es menor de edad";
            break; 
        case 3:
            $resultado = "es menor de edad";
            break; 
        case 4:
            $resultado = "es menor de edad";
            break; 
        case 5:
            $resultado = "es menor de edad";
            break; 
        case 6:
            $resultado = "es menor de edad";
            break; 
        case 7:
            $resultado = "es menor de edad";
            break; 
        case 8:
            $resultado = "es menor de edad";
            break; 
        case 9:
            $resultado = "es menor de edad";
            break; 
        case 10:
            $resultado = "es menor de edad";
            break; 
        case 11:
            $resultado = "es menor de edad";
            break; 
        case 12:
            $resultado = "es menor de edad";
            break; 
        case 13:
            $resultado = "es adolescente";
            break; 
        case 14:
            $resultado = "es adolescente";
            break; 
        case 15:
            $resultado = "es adolescente";
            break; 
        case 16:
            $resultado = "es adolescente";
            break; 
        case 17:
            $resultado = "es adolescente";
            break; 
        default:
            $resultado = "es mayor de edad";
            break; 
    }

        print_r("Esta persona " . $resultado);
}

?>

<form action="ejercicio5.php" method="post">

    <input type="number" name="edad" placeholder="Ingrese la edad" required>
    <input type="submit" value="Enviar">

</form>