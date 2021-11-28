<!DOCTYPE html>
<html lang="pt_br">
    <?php
        include ('../conexao.php');
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dialogo.css">
    <link rel="stylesheet" href="../css/modulo1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
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

    <div class="fundo_background">
        
        <div class="container">
            <div>
                <a href="index.php"><input type="submit" value="voltar"></a>
                <p>&nbsp</p>
            </div>
            
            <div class="conteudo">

            <!-- MSG VENCER -->
                <div id="id01" class="modal">
                        <div class="modal-content">
                            <br>
                            <!-- imput do Hidden Resultado  -->
                            <form action="" method="POST">
                                <input type="submit" id="btt_valida" class="close" value="Avançar">
                                <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_fruta" name="exercicio_fruta" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="" name="id_usuario" id="id_usuario"  readonly><br>
                            </form>
                            <input type="submit" value="Refazer" onclick="fecharVideo()" >
                            <br>
                            <div>
                               <video id="video" width="900" height="800">
                               <source id="video_link" src="../img/vide_conclusao.mp4" type="video/mp4">
                            </div>
                        </div>

                    </div>
            
                    <div id="myModal" class="modal2">
                        <!-- Modal content -->
                        <div class="modal-content2">
                          <span class="close2">&times;</span>
                          <img  src="../img/pergunta2.png" alt="" style="height: 150px; width: 150px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                          <p class="p1"> OOpaa, como é bom te encontrar entusiasmo assim ... Aqui é o modulo mais avançado, escolha um exercicio meu rapaz, e boa SORTE</p><br>
                        
                        </div>

                    </div>

                  <!-- MSG VENCER -->

                <div class="content_pergunta">
                    <table>
                        <tr>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="exercicio_if.php" style="border: 1px solid black"><img class="card-img-top" src="../img/exercicioif.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">1# - Ajude o gato </h5>
                                        <p class="card-text">Modulo para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                 </div>    
                            </td>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="md1_exec1_caixa.php" style="border: 1px solid black"><img class="card-img-top" src="../img/caixa.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">2# - Caixa</h5>
                                        <p class="card-text"> Modulo para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                 </div>    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="maze.php" style="border: 1px solid black"><img class="card-img-top" src="../img/maze.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">3# - Labirinto </h5>
                                      <p class="card-text">Vamos para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                </div>    
                            </td>
                        </tr>
                        
                   
                    </table>
                </div>
                  
            </div>
        </div>
    </div>
</body>
</html>

<script src="../js/dialogo_inicio.js" defer></script>
<script src="../js/script_soma.js" defer></script>

