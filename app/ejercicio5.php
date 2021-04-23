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
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            $resultado = "es menor de edad";
            break; 
        case 13:
        case 14:
        case 15:
        case 16:
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