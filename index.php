<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão Acadêmica</title>
</head>
<body>
    <?php
        require './Pessoa.php';
        require './Estudante.php';
        require './Professor.php';
        require './Disciplina.php';
        $professor = new Professor('professor');
        ?>

        <h2>Professores</h2>

        <?php
        $professores = $professor->verPessoa();
        foreach ($professores as $key => $object) {
            foreach ($object as $label => $value) {
                echo "<b>{$label}:</b> {$value} <br>";
            }
            echo "<a href='excluirProfessor.php?key={$key}'>Excluir</a><br><br><hr>";
        }
    ?>

</body>
</html>