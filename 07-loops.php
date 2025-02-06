<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops</title>
</head>
<body>
    <h1>Trabalhando com comandos/laços de repetição</h1>
    <hr>

    <h2>WHILE (ENQUANTO)</h2>
    <p>Executa ações <b>enquanto a condição for verdadeira</b>. Se a condição 
    inicialmente não é verdadeira, o loop não funciona nenhuma vez.</p>
<?php
$i = 10;
while ($i <= 3) {
?>
    <p> <?=$i?></p>
<?php
    $i++;      
} 
?>

<hr>

    <h2>DO/WHILE (parecido com Repita)</h2>
    <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue 
    verdadeira, segue fazendo outros ciclos de repetição até a condição se tornar falsa.
    </p>

<?php
$j = 1;
do {
?>

    <div>
        <h3>Título...</h3>
        <p>Texto qualquer...</p>
    </div>
<?php
    $j++;
} while($j <= 3);
?>

<h2>FOR (PARA)</h2>
    <p>Executa ações por uma <b>quantidade determinada</b> de vezes.</p>
<?php
for( $i = 1; $i <= 10; $i++ ){
?>
    <p><code>i</code> vale: <b><?=$i?></b></p>
<?php
}
?>

<hr>

<h2>Meses</h2>
<h3>Acessando array indexado/numérico</h3>
<?php

$meses = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];
?>

<?php
// (nomeDoArray as nomeDeVariavelDeAcesso)
foreach ($meses as $mes) {
?>   
    <p>Mês: <?=$mes?></p>
<?php    
  }
?>


<h3>Acessando array associativo</h3>
<?php
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

foreach($clubes as $clube => $apelido) {
?>
    <p>O clube <?=$clube?>  é conhecido como <?=$apelido?></p> 
<?php     
}
?>

    <h3>Acessando objeto/ instância</h3>
<?php
$livro = new stdClass();
$livro->título = "Senhor dos Anéis: A Sociedade do Anél";
$livro->autor = "J.R.R. Tolkien";
$livro->ano = 1954;

foreach($livro as $propriedade => $valor){
?>
    <p> <?=$propriedade?>: <b><?=$valor?></b></p>
<?php    
}
?>

</body>
</html>