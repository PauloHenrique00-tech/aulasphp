<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    
<?php

$compra = 8000;

if($compra > 5000) {
    $valorFinal = $compra - ($compra * 0.15);
} elseif ($compra > 3000) {
    $valorFinal = $compra - ($compra * 0.10);
} elseif ($compra > 1000) {
    $valorFinal = $compra - ($compra * 0.05);
} else {
    $valorFinal = $compra;
}

?>

<p>O valor final é de: R$ <?= number_format($valorFinal, 2, ",", ".")?></p>


</body>
</html>