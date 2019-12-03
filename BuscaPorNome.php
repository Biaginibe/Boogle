<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/chorand.css" />
        <link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <div id="boog">
            <a id="linkpreto" href="BuscaPorNome.html">
                <p>
                    Boogle
                </p>
            </a>
            </div>
        <form action="BuscaPorNome.php" method="POST">
            
            
            <div id="busca2">
                <input type="text" name="cxbusca" placeholder="Digite aqui o que deseja buscar" size="100px" height="30px">
                <button type="submit">  
                        <img src="img/globe.png" width="20px" height="20px" title="Buscar Dados" />
                </button>
                
            </div>
            
        </form>

            
        
        <div id="listar">
	       <?php
            //if($resultado != 0){
            //    echo "<script>
        //                alert('Site localizado!');
          //          </script>
            //        ";
            //}
            //else{
              //  echo "<script>
                //    alert('Site não localizado!');
                  //  window.location.href ='index.html';
        //        </script>
          //      ";
            //}
            include_once 'conexao.php';
            $nome =$_POST['cxbusca'];
            
            $consultar = "select *from tbsites where MATCH(nomesite) AGAINST ('$nome')or nomesite LIKE '%$nome%'";
            
            $executar = mysqli_query($conn,$consultar);
            
            $resultado = mysqli_num_rows($executar);
		      while($linha = mysqli_fetch_array($executar))
              { 
		      ?>
                <a class="endereco" href="<?php echo $linha["enderecosite"];?>"><?php echo $linha["nomesite"];?></a><br/>
                <div class="url"><?php echo $linha["enderecosite"];?><br/></div>
                <div class="descricao"><?php echo $linha["descricao"];?></div>
                <br/>
	           
                <br/>
	           <?php } ?>
	           
        </div>
    </body>
</html>