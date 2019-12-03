<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    include_once 'conexao.php';
    $id = $_GET['id'];

    $consulta = "select *from tbsites where codigo ='$id'";
    $executar = mysqli_query($conn, $consulta);

    while($exibir = mysqli_fetch_array($executar)){
    ?>
    <form method="POST" action="AlterarDados.php">

	    <input type="hidden" name="codigo" value="<?php echo $exibir['codigo'];?>">
        Nome do site:<input type="text" name="cxnome" value="<?php echo $exibir['nomesite'];?>">
        Endereço do site:<input type="text" name="cxendereco" value="<?php echo $exibir['enderecosite'];?>">
        Descrição do site:<input type="text" name="cxdescricao" value="<?php echo $exibir['descricao'];?>">
	<input type="submit" value="Alterar">
	</form>
	
    <?php 
    } 
    ?>




    </body>
</html>