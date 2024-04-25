<?php
function passouDeAno($notas) {
    $reprovadas = 0;
    foreach ($notas as $materia => $nota) {
        if ($nota < 6) {
            $reprovadas++;
        }
    }
    return $reprovadas >= 3 ? "Não passou de ano!" : "Passou de ano!";
}

$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];

echo passouDeAno($pessoa['notas']); 
?>

<?php
function mediaIdade($pessoas) {
    $somaIdades = 0;
    foreach ($pessoas as $pessoa) {
        $somaIdades += $pessoa['idade'];
    }
    return $somaIdades / count($pessoas);
}

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

echo mediaIdade($pessoas); 
?>

<?php
function pessoaMaisVelha($pessoas) {
    $maisVelha = null;
    $idadeMaxima = 0;
    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > $idadeMaxima) {
            $idadeMaxima = $pessoa['idade'];
            $maisVelha = $pessoa['nome'];
        }
    }
    return $maisVelha;
}

echo pessoaMaisVelha($pessoas);
?>

<?php
function pessoaMaisVelha($pessoas) {
    $maisVelha = null;
    $idadeMaxima = 0;
    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > $idadeMaxima) {
            $idadeMaxima = $pessoa['idade'];
            $maisVelha = $pessoa['nome'];
        }
    }
    return $maisVelha;
}

echo pessoaMaisVelha($pessoas);
?>
