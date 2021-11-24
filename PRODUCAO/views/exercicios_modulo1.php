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
                          <p class="p1"> OOh, está deve ser a sala de treino ... Aqui é o começo de tudo, escolha um exercicio JOVEM, e boa SORTE</p><br>
                        
                        </div>

                    </div>

                  <!-- MSG VENCER -->

                <div class="content_pergunta">
                    <table>
                        <tr>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="exercicio_soma.php" style="border: 1px solid black"><img class="card-img-top" src="../img/soma_exercicio.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">1# - Soma</h5>
                                        <p class="card-text">Modulo para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                 </div>    
                            </td>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="exercicio_soma_divertida.php" style="border: 1px solid black"><img class="card-img-top" src="../img/exercicios_divertida.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">2# - Soma Divertida</h5>
                                        <p class="card-text"> Modulo para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                 </div>    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="exercicio_fruta.php" style="border: 1px solid black"><img class="card-img-top" src="../img/exerc_fruta.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">3# - Valor da fruta </h5>
                                        <p class="card-text">Modulo para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                </div>    
                            </td>
                            <td>
                                <div class="card" style="width: 15rem;">
                                    <a href="acheomeio.php" style="border: 1px solid black"><img class="card-img-top" src="../img/exerc_metadinha.png" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">4# - Ache o meio </h5>
                                      <p class="card-text">Vamos para o preparatorio para virar um aspirante a heroi, você consegue ?</p>
                                    </div>
                                </div>    
                            </td>
                        </tr>
                        
                   
                    </table>
                </div>
                  <!-- l -->
            </div>
        </div>
    </div>
</body>
</html>

<script src="../js/dialogo_inicio.js" defer></script>
<script src="../js/script_soma.js" defer></script>

