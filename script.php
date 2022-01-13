<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
$categorias[] = "idoso";
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if(empty($nome)){
    echo "O nome não pode estar vazio.";
    return;
}
else if(strlen($nome) < 3){
    echo "O nome deve conter pelo menos 3 caracteres.";
    return; 
}
else if(strlen($nome) > 40){
    echo "O nome é muito extenso.";
    return; 
}

if(!is_numeric($idade)){
    echo "A idade informada não é um número.";
    return;
}

if($idade>=6 && $idade <= 12){
    $i = 0;
    echo "O nadador ". $nome. " compete na categoria ". $categorias[$i];
}
else if($idade>=13 && $idade<=18){
    $i = 1;
    echo "O nadador ". $nome. " compete na categoria ". $categorias[$i];
}
else if($idade>=19 && $idade<=59){
    $i = 2;
    echo "O nadador ". $nome. " compete na categoria ". $categorias[$i];
}
else if($idade>= 60){
    $i = 3;
    echo "O nadador ". $nome. " compete na categoria ". $categorias[$i];
}
else{
    echo "Não existe categoria cadastrada para a idade informada.";
}

?>
