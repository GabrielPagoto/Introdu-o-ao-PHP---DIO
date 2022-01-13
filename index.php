<?php

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    $nome = 'Eduardo';
    $idade = 18;
    //var_dump($nome);
    //var_dump($idade);

    if($idade >= 6 && $idade <= 12){
        echo $categorias[0];
    }
    else if($idade >= 13 && $idade <= 17){
        echo $categorias[1];
    }
    else{
        echo $categorias[2];
    }
?>