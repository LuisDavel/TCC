<?php
	    include('../conexao.php');
        include('../verifica_login.php');

// VALIDA SESSÃO
        if (@$_SESSION['id'] == "") {
            header("Location:login.php");
        }


// SALVA DADO DO ID DE QM LOGOU
        $id = $_SESSION['id'];


// SELECT PARA VERIFICAR O TIPO DE HEROI ESCOLHIDO        
        $sql = "SELECT tp_heroi FROM USUARIO WHERE CD_USUARIO = " . $id;
        $retorno = mysqli_query($con, $sql);

// SELECT PARA VERIFICAR SOMA DE PONTOS INSIGNIA

     


?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
<body style="background-color: blue">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="correcoes.php">Correções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista_rank.php">Ranking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php?acao=sair">SAIR</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- NAVIBAR fim -->
    
    <!-- BODY  -->
    <section >
        <div class="container">
            <div class="barra_direita">
                <div class="div">
                  
                
<?php

    while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
        
 //IDENTIFICA O HEROI ESCOLHIDO      
        if($item['tp_heroi'] == "F") {  
                 
?>

                    <div>
                         <img src="../img/Rosto_girls.png" alt="Girl" style=" width: 90px;"><br>
                    </div>    
                      
<?php
        
        }else{

?>
                    <div>
                         <img src="../img/Rosto_heroi.png" alt="Boy" style=" width: 90px;"><br>
                    </div> 
                
<?php   
        }
      
?>                  

                    <div class="paragrafo">
                      <p class="p1">Nome de heroi:</p>
                      <p><?php echo($_SESSION['nome_heroi']); ?> &nbsp; 
                      <p class="p1"> Identificador:</p>
                      <p> <?php echo($_SESSION['id']); ?></p>
                      <p class="p1">Conquistas</p>
                      <div class="insignia">
<?php
    }
      $sql2 =  "SELECT sum(a.nota_exerc) nota FROM modulo a JOIN usuario b ON (a.cd_usuario=b.cd_usuario) WHERE b.CD_USUARIO =".$id." group by a.nome_exerc order by nota";
      $retorno2 = mysqli_query($con, $sql2);
      while($item2 = mysqli_fetch_array($retorno2, MYSQLI_ASSOC)) {

 ?>
                     
                        <ul>
                        <?php
                            if($item2['nota'] > 1){
                                
?>
                            <li><abbr title="Por você ter mais de 10 pontos"><img src="../img/circulo_azul.png" alt="a" style="width:10px;"></abbr></li>
<?php
                          }else if($item2['nota'] < 10){
?>
                        
                          <li><img src="../img/circulo-preto.png" alt="a" style="width:10px;"></li>   
                          <li><img src="../img/circulo-preto.png" alt="a" style="width:10px;"></li>
                          <li><img src="../img/circulo-preto.png" alt="a" style="width:10px;"></li>
    	                    <li><img src="../img/circulo-preto.png" alt="a" style="width:10px;"></li>   
<?php
                          }else{
                            
                          }                                   
 ?>
                            
	                      </ul>
                     
                   
                   
                
<?php
    }
      
 ?>
               </div>
      </div>

 </div>
                <!-- <div class="div2">
                  <p class="p1">Rankings</p>
                  <table >
                    <td>
                        <tr><?php echo($_SESSION['nome_heroi']); ?></tr>
                        <tr><div class="progress-barr" style="--progress: 20;"></div></tr>
                    </td>
                    <td>
                        <tr>Nicolas</tr>
                        <tr><div class="progress-barr" style="--progress: <?php echo '20' ?>;"></div></tr>
                    </td>


                  </table>
                  


                </div> -->
            </div> 
            <br>  

            <div class="barra_modulos">
                <br>

                <a href="exercicios_modulo1.php"><div class="card" style="background: rgb(131,58,180);
                                         background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);">
                    <p> Modulo 1 </p>                             
                </div></a>
                <br>
<?php
            /// IF Q VALIDA A PONTUAÇÃO PARA LIBERA O MODULO
?>                
                <a href="exercicios_modulo2.php"><div class="card" style="background: rgb(246,254,16);
                                         background: linear-gradient(90deg, rgba(246,254,16,1) 0%, rgba(224,91,22,1) 50%, rgba(255,128,128,1) 100%);">
                    <p> Modulo 2 </p>                            
                </div>
                <br>
               
            </div>
        </div>

 
    </section>
    <!-- BODY fim -->

</body>
</html>