<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: -1001px; 
  width: 100px;
}
</style>

<?php

if (isset($_POST['ciudad'])){
    $ciudad = $_POST['ciudad'];
}else{
    $ciudad = 0;
}
// $edad =  rand(1, 16);

if (!empty($ciudad)){
    switch($ciudad){
        case 1:
        case 2:
            echo "Hace frío";
            break;
        case 3:
            echo "Hace calor";
            break;     
    }
}

?>

<form action="ejercicio6.php" method="post">

    <select name="ciudad"required>
        <option value="1" <?php if($ciudad == 1){ echo "selected"; }?>>Bariloche</option>
        <option value="2" <?php if($ciudad == 2){ echo "selected"; }?>>Ushuaia</option>
        <option value="3" <?php if($ciudad == 3){ echo "selected"; }?>>Cataratas</option>
    </select>
    <input type="submit" value="Enviar">
</form>