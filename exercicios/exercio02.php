<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            padding: 0;
            margin: 20px;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        article {
            background-color:rgb(209, 81, 81);
            border-radius: 8px;
            padding: 20px;
            flex: 1;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h1 {color: darkblue;
        }

        h2, h3 {
            color: #4CAF50;
        }

        p {
            margin: 8px 0;
        }

        .highlight {
            color: #0078ff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Arrays</h1>
    <p>Palmeiras não tem Mundial</p>
<?php

$pessoa1 = [
    "nome" => "João",
    "email" => "joão23@hotmail.com",
    "senha" => "12345",
    "idade" => 27,
    "sexo" => "Masculino",
    "cidade" => "São Paulo"
];

$pessoa2 = [
    "nome" => "Marcelo",
    "email" => "marcelo24@hotmail.com",
    "senha" => "12345",
    "idade" => 26,
    "sexo" => "Masculino",
    "cidade" => "Varginha"
];

?>

<div class="container">

<article>
<h2>Acessando os dados</h2>
    <p>Nome: <?=$pessoa1["nome"]?> </p>
    <p>E-mail: <?=$pessoa1["email"]?> </p>
    <p>Senha: <?=$pessoa1["senha"]?> </p> <!-- não deveria colocar a senha e a cidade nessa parte -->
    <p>Idade: <?=$pessoa1["idade"]?> </p>
    <p>Sexo: <?=$pessoa1["sexo"]?> </p>
    <p>Cidade: <?=$pessoa1["cidade"]?> </p>   
</article>

<article>
<h3>Pessoa2</h3>
    <p>Nome: <?=$pessoa2["nome"]?> </p>
    <p>E-mail: <?=$pessoa2["email"]?> </p>
    <p>Senha: <?=$pessoa2["senha"]?> </p>
    <p>Idade: <?=$pessoa2["idade"]?> </p>
    <p>Sexo: <?=$pessoa2["sexo"]?> </p>
    <p>Cidade: <?=$pessoa2["cidade"]?> </p>

</article>

</div>
</body>
</html>