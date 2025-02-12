<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="mb-4">Exercício 5</h1>

<?php 
$nota1 = 7;
$nota2 = 7;
$nota3 = 7;
$media = calcularMedia($nota1, $nota2, $nota3);
$situacao = checarSituacao($media);
?>

<p>Média: <?=$media?></p>
<p class="alert alert-<?=$media >= 7 ? 'success' : 'danger'?>">
    Situação: 
    <?=$situacao?>
</p>

<?php

function calcularMedia($nota1, $nota2, $nota3){
    return ($nota1 + $nota2 + $nota3) / 3;
}

function checarSituacao($media){
    return ($media >= 7) ? "Aprovado" : "Reprovado";
}
?>

<?php
$alunos = [
    ["Nome" => "A","nota1" => 9, "nota2" => 9, "nota3" => 8],
    ["Nome" => "B","nota1" => 8, "nota2" =>7.5, "nota3" => 7],
    ["Nome" => "C","nota1" => 6, "nota2" => 6, "nota3" => 7],
    ["Nome" => "D", "nota1" => 5.5, "nota2" => 6, "nota3" => 8],
    ["Nome" => "E", "nota1" => 10, "nota2" => 10, "nota3" => 8.5]
];
?>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Média</th>
            <th>Situação</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($alunos as $aluno) { 
    $media = calcularMedia($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]);
    $situacao = checarSituacao($media);
    ?>
   
  <tr>
    <td><?=$aluno["Nome"]?></td>
    <td><?=$aluno["nota1"]?></td>
    <td><?=$aluno["nota2"]?></td>
    <td><?=$aluno["nota3"]?></td>
    <td><?=number_format($media, 2)?></td>
    <td><?=$situacao?></td>
  </tr>  

<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
