<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/chorand.css" />
    </head>
    <body>
        <?php
        include_once 'conexao.php';
        $consultar = "select *from tbsites";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
        ?>
        <table border="0.2">
            <tr>
                <td>Nome</td>
                <td>URL</td>
                <td>Descrição</td>
            </tr>
            <tr>
                <td><?php echo $linha["nomesite"];?></td>
                <td><?php echo $linha["enderecosite"];?></td>
                <td><?php echo $linha["descricao"];?></td>
                <div id="botoes">
                <a href="MostrarAlterar.php?id=<?php echo $linha["codigo"];?>"><img src="img/alterar.png" width="30px" height="30px" title="Alterar Dados" /></a>
                <a href="ExcluirDados.php?id=<?php echo $linha["codigo"];?>"><img src="img/excluir.png" width="30px" height="30px" title="Excluir Dados" /></a>
                </div>
                <br/><br/>
        
                
                
            </tr>
        </table>
	    <br/><br/><br/>
       
    <?php 
    } 
    ?>
    
    <a href="index.html">Voltar</a>
    

    </body>
</html>