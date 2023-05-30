<?php
    $link = mysqli_connect("localhost:3306", "root", "", "projetoweb");

    if(!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_conect_errno() . PHP_EOL;
        echo "Debugging errno: " . mysqli_conect_errno() . PHP_EOL;
        exit;
    }

    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;

    $id = 18;
    $nome = "João Manoel Valeriano";
    $endereco = "R. Arturo Vital";

    $sql = "INSERT INTO agendamentos (id, nome, endereco) VALUES (?,?,?)";
    $link->prepare($sql)->execute([$id, $nome, $endereco]);

    $stmt = $link->query("SELECT * FROM agendamentos");
    while ($row = $stmt->fetch_assoc()){
        echo $row['nome']."<br />\n";
    }



    mysqli_close($link);
    ?>

    
