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
    <link rel="stylesheet" href="../css/soma.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Cadastro</title>
</head>
<body>
    <div class="fundo_background">
        <div id="id01" class="modal">
                        <div class="modal-content">
                            <br>
                            <!-- imput do Hidden Resultado  -->
                            <form action="../includes/exercicio_soma_db.php" method="POST">
                                <input type="submit" id="btt_valida" class="close" value="Avançar">
                                <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>                              
                            </form>  
                            <form action="../includes/exercicio_soma_db.php" method="POST">
                                <input type="hidden"  value="" name="nota" id=""  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>  
                                <input type="submit" value="Refazer" onclick="fecharVideo()" >                            
                            </form>  
                            
                            <br>
                            <div>
                               <video id="video" width="900" height="800">
                               <source id="video_link" src="../img/vide_conclusao.mp4" type="video/mp4">
                            </div>
                        </div>

                    </div>
        <div class="container">
            <div>
                <a href="exercicios_modulo1.php"><input type="submit" value="voltar"></a>
                <p>&nbsp</p>
                <p class="p3">Tentativas</p>
                <p class="p3" id="paragrafo_tentativa">0 / 5</p>
            </div>
            
            <div class="conteudo">

            <!-- MSG VENCER -->
                    

                    <div id="myModal" class="modal2">
                        <!-- Modal content -->
                        <div class="modal-content2">
                          <span class="close2">&times;</span>
                          <img  src="../img/pergunta2.png" alt="" style="height: 150px; width: 150px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                          <p class="p1"> Para um primeiro teste temos essa somatoria, é importante encontrar a lógica na vertical, talvez isso ajude em algo ... TAMBÉM temos 5 tentativas então VOCÊ CONSEGUE!!! </p><br>
                        
                        </div>

                    </div>

                  <!-- MSG VENCER -->

                <div class="content_pergunta">
                    

                    <table>
                        <tr>
                           <td id="result1">3</td>
                           <td id="result2">3</td>
                           <td id="result3">3</td>
                        </tr>
                        <tr>
                           <td id="result4">3</td>
                           <td id="result5">3</td>
                           <td id="result6">3</td>
                        </tr> 
                        <tr>
                          <td id="result7">3</td>
                           <td id="result8">3</td>
                           <td id="result">?</td>
                        </tr>
                        
                    </table>
                    
                </div>
                <div>
                    <input id="valor" type="text" placeholder="Resultado"> <input type="submit" value="Validar" onclick="resultado()"> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script src="../js/dialogo_inicio.js" defer></script>
<script src="../js/script_soma.js" defer></script>

