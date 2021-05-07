<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: -1001px; 
  width: 100px;
}
</style>

<form action="calcular.php" method="post">
    <label for="">Valores:</label>
    <input type="number" name="valor1" placeholder="Ingrese el valor 1" required>
    <input type="number" name="valor2" placeholder="Ingrese el valor 2" required>
    <br><br>
    <label for="">Operador:</label>
    <input type="text" name="operador" placeholder="Sumar o Dividir" required>
    <input type="submit" value="Enviar">
    <br><br>
    El operador funciona con las palabras "Sumar" o "Dividir".
    
</form>

<?php 

/* Autor: Jorge Calderón

Enunciado: 

1. Crear 2 funciones: sumar y dividir.
2. Crear función llamada: retornarSiEsCero. (true si es 0, false si no es 0).
3. Crear función calcular.
4. Crear función: mostrarResultado: 

Parámetros:

1. sumar: recibe numero1 y numero2
   division: recibe numero1 y numero2
2. retornarSiEsCero: recibe numeroIngresado.
3. calcular: recibe numero1, operador, numero2.
4. mostrarResultado: recibe resultadoParametro

Enunciado: 

Sumar: devuelve resultado.
Dividir: usar función retornarSiEsCero (regresa true si es 0, y no hace la división). Si es 0, retornar: infinito.
Calcular: Recibir ambos parámetros y también el de operador (sumar/dividir). Si es otro, retornar "no existe función"
MostrarResultado: Solo invocar e imprimir el resultado

*/

function sumar($numero1,$numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}

function dividir($numero1,$numero2){
    if(retornarSiEsCero($numero2)){
        return "Infinito";
    }else{
        $resultado=$numero1/$numero2;
        return $resultado;
    }
}

function retornarSiEsCero($numero){
    if($numero==0){
        return true;
    }else{
        return false;
    }
}

function calcular($valor1,$valor2,$operador){
    switch($operador){
        case "Sumar": 
            // $resultado = sumar($valor1,$valor2);
            mostrarResultado(sumar($valor1,$valor2));
            break;
        case "Dividir": 
            // $resultado = dividir($valor1,$valor2);
            mostrarResultado(dividir($valor1,$valor2));
            break;
        default: 
            return "No existe esta función aun.";
            break;
    }
}

function mostrarResultado($resultado){
    echo $resultado;
}

if(isset($_POST['valor1'])){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operador = $_POST['operador'];
    
    echo calcular($valor1,$valor2,$operador);
}else{
    $valor1 = 1;
    $valor2 = 1;
    $operador = "Sumar";
}



?>