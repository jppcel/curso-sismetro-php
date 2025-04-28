<?php
    function fibonacci($posicao){
        $valores = [1,1];

        if($posicao < 3){
            return 1;
        }else{
            for($i = 2; $i < $posicao; $i++){
                $valores[$i] = $valores[$i-1] + $valores[$i-2];
            }

            return $valores[$posicao - 1];
        }
    }

    echo fibonacci(10);
?>