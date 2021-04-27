<?php
    $hora = 19;

    if($hora < "12") {
        echo "Bom dia!";
    }else if($hora < "18"){
        echo "Boa tarde";
    }else {
        echo "Boa noite!";
    }
?>