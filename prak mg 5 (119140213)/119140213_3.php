<?php
//Muhammad Naufal Ghani
//119140213

    function BP ($r, $d){
     for($i=$r; $i<=$d; $i++){
        $e = 0;
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){
                $e++;
            }
        }
        if($e == 2){
         echo $i.'      ';
        }
     }
    }
    echo "<br>";
    BP(0, 50);
    echo "<br>";
    echo "Merupakan Bilangan prima dari 1-50 ";

?>