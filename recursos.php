<?php
define("ESCOLA", "Senac");
$curso = "Téc. Informática para Internet";
$tecnologias = ["HTML", "CSS", "JS"];

// função
function verificarIdade(int $valorDaIdade):string {
    return $valorDaIdade >= 18 ? "maior" : "menor";
}