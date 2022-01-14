<?php

session_start();

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
    $_SESSION['mensagem de erro'] = "O nome não pode estar vazio, favor preencher novamente.";
    header('Location: index.php');
    return;
}
else if(strlen($nome) < 3){
    $_SESSION['mensagem de erro'] = "O nome não pode conter menos de três caracteres.";
    header('Location: index.php');
    return;
}
else if(strlen($nome) > 40){
    $_SESSION['mensagem de erro'] = "O nome não pode conter mais de quarenta caracteres.";
    header('Location: index.php');
    return;
}
else if (empty($idade)){
    $_SESSION['mensagem de erro'] = "A idade não pode estar vazia.";
    header('Location: index.php');
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['mensagem de erro'] = "A idade informada não é um número.";
    header('Location: index.php');
    return;
}

if($idade>=6 && $idade <= 12){
    $i = 0;
    $_SESSION['mensagem de sucesso'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i];
    header('Location: index.php');
    return;
}
else if($idade>=13 && $idade<=18){
    $i = 1;
    $_SESSION['mensagem de sucesso'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i];
    header('Location: index.php');
    return;
}
else if($idade>=19 && $idade<=59){
    $i = 2;
    $_SESSION['mensagem de sucesso'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i];
    header('Location: index.php');
    return;
}
else if($idade>= 60){
    $i = 3;
    $_SESSION['mensagem de sucesso'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i];
    header('Location: index.php');
    return;
}
else{
    $_SESSION['mensagem de erro'] = "Não existe categoria cadastrada para a idade informada.";
    header('Location: index.php');
    return;
}

?>
