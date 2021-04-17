<?php

$mes =  rand(1, 12); 

echo "La variable mes es " . $mes . " y la estación es ";

if($mes>0 && $mes<=3){
    echo "verano";
}else{
    if($mes>3 && $mes<=6){
        echo "otoño";
    }else{
        if($mes>6 && $mes<=9){
            echo "invierno";
        }else{
            echo "primavera";
        }
    }
}

?>