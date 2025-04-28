<?php 
    function numero_primo($posicao){
        $primos = array(2);

        $n = 3;
        while(count($primos) < $posicao){
            $encontrado = true;
            foreach($primos as $primo){
                if($n%$primo == 0){
                    $encontrado = false;
                }
            }
            if($encontrado){
                $primos[] = $n;
            }
            
            $n++;
        }

        return $primos[$posicao - 1];
    }

    echo numero_primo(1000000);
?>