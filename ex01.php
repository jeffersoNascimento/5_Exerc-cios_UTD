
<?php
    
    /*Crie um programa que leia 10 números e informe a média aritmética e a soma dos números. 
    O uso de formulários nessa questão lhe dará o bônus de 2 escores. (2 esc)*/

    echo "<h2>A soma e média de 10 números</h2>";
    $r = array(0,0,0,0,0,0,0,0,0,0);
    for ($i=0;$i<1000000;$i++) {
          $n = rand(0,100000);
        if ($n<=9) {
          $r[$n]++;
        }
    }

    print_r($r);

    $array = $r;
    echo "<br><br>";
    echo "<strong>O array</strong> tem ".count($array). " elementos! <br>";

    function somaArray($array){
        $total = 0;
        foreach($array as $a){
            $total += $a;
        }

        return $total;
    }

    echo "<strong>A soma</strong> dos valores do <strong>array</strong> é ". somaArray($array)."! <br>";

    echo "<strong>A média</strong> dos valores do <strong>array</strong> é ". (somaArray($array)/count($array))."! <br>";
    
    echo "<hr>";

?>
</body>
</html>


