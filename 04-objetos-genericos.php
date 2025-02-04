<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabalhando com objetos genéricos</h1>
    <hr>
<?php
/* Criando unmas instância de uma classe genérica chamada stdClass (Standar Class) */
$usuario = new stdClass(); /* Instância ou objeto */

// Adicionando propriedades/atributos ao objeto
$usuario->nome = "Chapolin Colorado";
$usuario->idade = 25;
$usuario->email = "chapolin@gmail.com";
$usuario->telefones = ["11-2135-0300", "11-98888-7777"];

echo $usuario->nome;

// Pode ser usado {} chaves ao redor do objeto/propriedade ma interpolação
echo "<p><mark>{$usuario->nome}</mark></p>";  // Interpolação
?> 

    <h2>Analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>Saída de dados</h2>
    <p>Nome: <?=$usuario->nome?> </p>
    <p>Idade: <?=$usuario->idade?> anos</p>
    <p>Celular: <?=$usuario->telefones[1]?></p>

    <hr>


</body>
</html>