
<?php

    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if($lado1 == $lado2 && $lado1 == $lado3){
        echo "<h1>Triângulo Equilátero";

    }elseif($lado1 != $lado2 && $lado3){
        echo "<h1>Triângulo Escaleno";

    }else{
        echo "<h1>Triângulo Isósceles";

    }

?>