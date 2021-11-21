<?php
	    include('../conexao.php');
        include('../verifica_login.php');
        echo($_SESSION['nome_heroi'])
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
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Correções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perfil</a>
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
                     <div>
                         <img src="../img/Rosto_heroi.png" alt="Heroi" style=" width: 700px;">
                     </div>  
                </div>   
            
                <div class="div2">
                    s
                </div>
            </div> 
            <br>  
            <div class="barra_modulos">
                <br>
                <div class="card" style="background: rgb(131,58,180);
                                         background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);">
                    <p> Modulo 1 </p>                             
                </div>
                <br>
                <div class="card" style="background: rgb(246,254,16);
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