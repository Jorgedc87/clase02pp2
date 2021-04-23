<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>

<?php 
If (isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    if($valor1 >= $valor2 && $valor1 >= $valor3){
        $mayor = $valor1;
    }else{
        if ($valor2 >= $valor3){
            $mayor = $valor2;
        }else{
            $mayor = $valor3;
        }
    }

    if(!empty($mayor)){
        print_r("El numero mayor es: " . $mayor);
    }
}

?>

<form action="ejercicio4.php" method="post">

    <input type="number" name="valor1" placeholder="Ingrese el valor 1" required>
    <input type="number" name="valor2" placeholder="Ingrese el valor 2" required>
    <input type="number" name="valor3" placeholder="Ingrese el valor 3" required>
    <input type="submit">

</form>