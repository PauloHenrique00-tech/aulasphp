<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <h1>Linguagens de Programação</h1>
<?php
$linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];

foreach($linguagens as $linguagem) {
?>    
    <p>Linguagem: <?=$linguagem?></p>
<?php
}
?>  

<table>
    <thead>
        <tr>
          <th>ID</th>
          <th>Linguagem</th>
          <th>Descrição</th>  
        </tr>
    </thead>
    <?php
    foreach ($linguagens as $linguagem) {
        echo
        echo
    }
    ?>
</table>

</body>
</html>