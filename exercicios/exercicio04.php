<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Tabela com IDs</title>
    <style>
        /* Estilização básica da tabela */
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        /* Cores alternadas nas linhas */
        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(even) {
            background-color: #ffffff;
        }

        /* Efeito ao passar o mouse */
        tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Tabela com IDs Automáticos</h1>

    <?php
    // Array associativo com informações de linguagens
    $linguagens = [
        "HTML" => ["Descrição" => "Estruturação"],
        "CSS" => ["Descrição" => "Estilos"],
        "JS" => ["Descrição" => "Comportamentos"],
        "PHP" => ["Descrição" => "Back-End"],
        "SQL" => ["Descrição" => "Manipulação de dados"],
        "Java" => ["Descrição" => "Softwares"]
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id = 1; // Contador de IDs fictícios
            foreach ($linguagens as $nome => $dados) {
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nome</td>";
                echo "<td>{$dados['Descrição']}</td>";
                echo "</tr>";
                $id++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>
