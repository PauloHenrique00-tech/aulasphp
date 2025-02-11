<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Exercício 5</h1>

<?php 

$nota1 = 7;
$nota2 = 7;
$nota3 = 7;
$media = calcularMedia($nota1, $nota2, $nota3);

if ($media >= 7) {
?>    
    <p><?=$media?>Aprovado!</p>
<?php    
} else {
?>
    <p><?=$media?>Reprovado!</p>
<?php    
}
?>

<?php

function calcularMedia($nota1, $nota2, $nota3){
    return ($nota1 + $nota2 +$nota3) / 3;
};
?>

<?php
function checarSituacao($media){
    
}

?>

<?php

//$situacao = media($nota1, $nota2, $nota3)
?>
        <p>Situação: </p>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>