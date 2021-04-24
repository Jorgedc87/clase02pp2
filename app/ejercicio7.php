<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: -1001px; 
  width: 100px;
}
</style>

<?php

if (isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    if($valor1 != $valor2 && $valor1 != $valor3 && $valor2 != $valor3){
        if($valor1>$valor2 && $valor1>$valor3){
            // Mayor = 1
            if($valor2 > $valor3){
                $medio = $valor2;
            }else{
                $medio = $valor3;
            }
        }else{
            if($valor2>$valor1 && $valor2>$valor3){
                // Mayor = 2
                if($valor1 > $valor3){
                    $medio = $valor1;
                }else{
                    $medio = $valor3;
                }
            }else{
                // Mayor = 3
                if($valor1 > $valor2){
                    $medio = $valor1;
                }else{
                    $medio = $valor2;
                }

            }
        }

        $resultado = ($valor1 . ", " . $valor2 . ", ". $valor3 . ". El número medio es: " . $medio);
    }else{
        $resultado = ($valor1 . ", " . $valor2 . ", ". $valor3 . ". No hay número medio");
    }

    if(!empty($resultado)){
        print_r($resultado);
    }
}

?>

<form action="ejercicio7.php" method="post">

    <input type="number" name="valor1" placeholder="Ingrese el valor 1" required>
    <input type="number" name="valor2" placeholder="Ingrese el valor 2" required>
    <input type="number" name="valor3" placeholder="Ingrese el valor 3" required>
    <input type="submit">

</form>