<?php
include_once 'conexao.php';

$nome=$_POST['cxnome'];
$endereco=$_POST['cxendereco'];
$descricao=$_POST['cxdescricao'];

$sql = "insert into tbsites (nomesite, enderecosite, descricao)
values('$nome', '$endereco', '$descricao')";

$query = mysqli_query($conn, $sql);

echo "Dados registrados com sucesso";
echo "<br/><a href='index.html'>Voltar</a><br/>";

?>