<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de professor</title>
</head>
<body>
    <?php
    require './Pessoa.php';
    require './Professor.php';

    $professor = new Professor('professor');
    $exclusaoProfessor = $professor->excluirPessoa($_GET['key']);

    if ($exclusaoProfessor) {
        echo "<h3>Professor excluído com sucesso!</h3>";
    }else{
        echo "<h3>Falha ao excluir professor!</h3>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>