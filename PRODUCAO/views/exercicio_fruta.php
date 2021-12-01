<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include ('../conexao.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/valor_fruta.css">
    <link rel="stylesheet" href="../css/dialogo.css">
    <title>Valor da fruta</title>
</head>
<body>
    <div class="img">

                <div id="id01" class="modal">

                <!-- Modal content -->
                    <div class="modal-content">

                        <br>
                        <!-- imput do Hidden Resultado  -->
                        <form action="../includes/valor_fruta_db.php" method="POST">
                                <input type="submit" id="btt_valida" class="close" value="Avançar">
                                <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_fruta" name="exercicio_fruta" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>
                        </form>        
                        <form action="../includes/valor_fruta_db.php" method="POST">
                                <input type="submit" value="Refazer" onclick="fecharVideo()" >
                                <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_fruta" name="exercicio_fruta" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>
                        </form> 
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
                          <p class="p1"> Certo, e agora ... Essa parece dificil, de numero as frutas, e a soma entre elas deve bater com o numero informado, força jovem você consegue.</p><br>
                        
                        </div>

                    </div>
        
        <div class="container">
            <div>
                <a href="exercicios_modulo1.php"><input type="submit" value="voltar"></a>
                <p>&nbsp</p>
                <p class="p3">Tentativas</p>
                <p class="p3" id="paragrafo_tentativa">0 / 5</p>
            </div>
            <div class="corpo">

                

                <table>
                    <tr>
                        <td id="numero1"><img src="../img/melancia.png" alt="Melancia"></td>
                        <td>+</td>
                        <td id="numero1"><img src="../img/melancia.png" alt="Melancia"></td>
                        <td>=</td>
                        <td id="result1">Valor não calculado</th>
                    </tr>
                    <tr>
                       <td id="numero2" ><img src="../img/Cereja-dupla.png" alt="Cereja"></td>
                       <td>+</td>
                       <td id="numero2"><img src="../img/Cereja-dupla.png" alt="Cereja"></td>
                       <td>=</td>
                       <td id="result2">Valor não calculado</td>
                    </tr> 
                    <tr>
                        <td id="numero3"><img src="../img/morango.png" alt="Morango"></td>
                        <td>+</td>
                        <td id="numero3"><img src="../img/morango.png" alt="Morango"></td>
                        <td>=</td>
                        <td id="result3">Valor não calculado</td>
                    </tr> 
                    <tr>
                        <td><img src="../img/melancia.png" alt="Melancia"></td>
                        <td id="muda1">+</td>
                        <td><img src="../img/Cereja-dupla.png" alt="Cereja"></td>
                        <td id="muda2">*</td>
                        <td><img src="../img/morango.png" alt="Morango"></td>
                        <td>=</td>
                        
                        <td>&nbsp; &nbsp; &nbsp; <input id="valor" type="text" placeholder="Qual sera o resultado ?"> <input type="submit" value="Validar" onclick="resultado()"> </td>
                       
                    </tr> 
                </table>
            </div>
        </div>    
    </div>
</body>

<script src="../js/script_fruta.js" defer></script>
<script src="../js/dialogo_inicio.js" defer></script>
</html>