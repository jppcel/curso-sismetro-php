<?php
    $materias = array(
        array("nome"=>"Banco de Dados","nota_final"=>rand(7,10)),
        array("nome"=>"Análise de Sistemas","nota_final"=>rand(7,10)),
        array("nome"=>"Ciência da Computação","nota_final"=>rand(7,10)),
        array("nome"=>"Frontend","nota_final"=>rand(7,10)),
        array("nome"=>"Programação Mobile","nota_final"=>rand(7,10)),
        array("nome"=>"Português","nota_final"=>rand(7,10)),
        array("nome"=>"Matemática","nota_final"=>rand(7,10)),
        array("nome"=>"História","nota_final"=>rand(7,10)),
        array("nome"=>"Geografia","nota_final"=>rand(7,10)),
        array("nome"=>"Química","nota_final"=>rand(7,10)),
        array("nome"=>"Biologia","nota_final"=>rand(7,10)),
        array("nome"=>"Sociologia","nota_final"=>rand(7,10)),
        array("nome"=>"Projeto de Vida","nota_final"=>rand(7,10)),
        array("nome"=>"Educação Financeira","nota_final"=>rand(7,10)),
    );

    foreach($materias as $materia){
        echo $materia[0]." - ".$materia[1]."<br/>";
    }
?>