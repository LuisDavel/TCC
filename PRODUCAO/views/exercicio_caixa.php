<?php
	include('../verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	    include('../conexao.php');
?>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exercicioCaixa.css">
    <link rel="stylesheet" href="../css/dialogo.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Aprendendo com escolhas</title>
</head>
<body>
    <div  class="img">
        <div class="container">
            <div>
                <a href="exercicios_modulo2.php"><input type="submit" value="voltar"></a>
                <p>&nbsp</p>
            </div>
            
            <div id="id01" class="modal">
                <div class="modal-content">
                    <br>
                    <!-- imput do Hidden Resultado  -->
                    <form action="../includes/md1_caixa.php" method="POST">
                        <input type="submit" id="btt_valida" class="close" value="Avançar">
                        <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                        <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                        <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                        <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                        <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>
                    </form>
                    <form action="../includes/md1_caixa.php" method="POST">
                        <input type="hidden" value="Refazer" id="btt_refaz" onclick="fecharVideo()" >
                        <input type="hidden"  value="" name="nota" id=""  readonly>
                        <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                        <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                        <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                        <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>
                    </form>              
                    <input type="submit" value="Refazer" id="btt_refaz2" onclick="fecharVideo()" >     
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
                  <p class="p1"> É importante que aqui nos deixemos as caixas organizadas para o heroi conseguir sair rapido para uma emergencia, TRATE DE ARRUMAR TUDO CERTINHO </p><br>
                
                </div>
            </div>



            <div class="acao" >
                <table>
                    <tr>
                        <td>
                            <figure>
                                <img class="dropzone" id="imge" src="../img/caixa_feixada.png" value="1" alt="Minha Figura">
                            </figure>
                        </td>
                        <td>
                            <figure>
                                <img class="dropzone" src="../img/caixa_feixada.png" value="2" alt="Minha Figura">
                            </figure>
                        </td>
                        <td>
                            <figure>
                                 <img class="dropzone" src="../img/caixa_feixada.png" value="3" alt="Minha Figura">
                             </figure>
                        </td>
                    </tr>
                    <tr>
                        <td><p class="tr_socorro"><b>Equipamentos</b><p  class="tr_socorro" id="p_result_caixa1"></p></p></td>
                        <td><p class="tr_socorro"><b>Alimentos</b><p class="tr_socorro" id="p_result_caixa2"></p></p></td>
                        <td><p class="tr_socorro"><b>Uniforme</b><p class="tr_socorro" id="p_result_caixa3"></p></p></td>
                    </tr>
                </table>
            </div>
        <!-- VIDEO -->
            
        
            <div class="escolhas">
                <div class="dropzone2" style="height:10px none; width: 80%; justify-content: inline;">
                
                    <img src="../img/21ab706902567bd0c10ba01c61d7541e-silhueta-do-icone-da-escada.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "1" style="width: 80px;" alt=" 1">
                    <img src="../img/escudo.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "1" style="width: 80px;" alt=" 1">
                    <img src="../img/Cereja-dupla.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "2" style="width: 80px;" alt=" 1">
                    <img src="../img/capa_1.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "3" style="width: 80px;" alt=" 1">
                    <img src="../img/capa_2.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "3" style="width: 80px;" alt=" 1">
                </div>
            </div>
            
        </div>
    </div>
    <script src="../js/ScriptCaixa.js" defer></script>
    <script src="../js/dialogo_inicio.js" defer></script>

</body>
</html>