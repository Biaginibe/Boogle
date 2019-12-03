<?php

	include_once 'conexao.php';
	
	$id = $_POST['codigo'];
	$nome=$_POST['cxnome'];
    $endereco=$_POST['cxendereco'];
    $descricao=$_POST['cxdescricao'];
	
	$alterar = "UPDATE tbsites SET 
	nomesite = '$nome',
	enderecosite = '$endereco',
    descricao = '$descricao'

	where codigo = '$id'";

	$executar = mysqli_query($conn,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='ListarDados.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>