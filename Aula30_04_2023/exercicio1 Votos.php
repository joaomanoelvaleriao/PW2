<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Votação</title>
</head>
<body>
    <h1>Vote em sua opção preferida:</h1>
    <form method="post" action="">
        <input type="radio" name="opcao" value="opcao1"> Opção 1<br>
        <input type="radio" name="opcao" value="opcao2"> Opção 2<br>
        <input type="radio" name="opcao" value="opcao3"> Opção 3<br>
        <input type="submit" name="votar" value="Votar">
    </form>

    <?php
    // Array para armazenar os votos
    $votos = array(
        'opcao1' => 0,
        'opcao2' => 0,
        'opcao3' => 0
    );

    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Verifica se a opção selecionada existe no array de votos
        if (isset($_POST['opcao']) && array_key_exists($_POST['opcao'], $votos)) {
            $opcaoVotada = $_POST['opcao'];
            // Incrementa o voto na opção selecionada
            $votos[$opcaoVotada]++;
            echo "<p>Voto registrado para $opcaoVotada!</p>";
        } else {
            echo "<p>Opção inválida!</p>";
        }
    }

    // Exibe os resultados da votação
    echo "<h2>Resultados:</h2>";
    foreach ($votos as $opcao => $voto) {
        echo "<p>$opcao: $voto votos</p>";
    }
    ?>
</body>
</html>
