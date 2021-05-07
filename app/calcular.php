<!-- <style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: -1001px; 
  width: 100px;
}
</style>

<form action="calcular.php" method="post">
    <label for="">Sumar:</label>
    <input type="number" name="suma1" placeholder="Ingrese el valor 1" required>
    <input type="number" name="suma2" placeholder="Ingrese el valor 2" required>
    <input type="submit">
    <br><br>
    <label for="">Dividir:</label>
    <input type="number" name="dividir1" placeholder="Ingrese el valor 1" required>
    <input type="number" name="dividir2" placeholder="Ingrese el valor 2" required>
    <input type="submit">
    <label for="">Dividir:</label>
    <input type="number" name="valor1" placeholder="Ingrese el valor 1" required>
    <input type="number" name="valor2" placeholder="Ingrese el valor 2" required>
    <input type="submit">
</form> -->

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

$valor1 = 10;
$valor2 = 0;

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

echo dividir($valor1,$valor2);


?>