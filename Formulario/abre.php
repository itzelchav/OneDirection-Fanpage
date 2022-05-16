<?php

$conexion = new mysqli("localhost", "id17409905_al211353", "0@&DAvht!R5l)wZG","id17409905_contacto");
    if($conexion){
        echo "La gestion fue exitosa !!";
        /*header("Location: index.php");*/
    }else{
        echo "Fallo la gestion";
    }
?>