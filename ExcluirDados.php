<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbsites where codigo='$id' ";
	$executar = mysqli_query($conn,$excluir);
	if($executar)
	{
		echo "Cliente excluido com sucesso";

		echo "<br>";
		echo "<a href='ListarDados.php'><img src='img/back.png' width='30px' height='30px' title='Voltar para o menu'/></a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
?>