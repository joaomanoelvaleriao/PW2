<?php
 
include("conexao.php");

$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cep = $_GET['cep'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];

$sql = "INSERT INTO clientes (nome, endereco, bairro, cep, cidade, estado) VALUES (":nome, :endereco, :bairro, :cep, :cidade, :estado");

$stmt = $PDO ->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':endereco', $endereco);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);

if($stmt->execute()){
    echo "Dados Gravados com Sucesso!";
}else{
    echo "Erro ao Gravar Dados";
}

?>