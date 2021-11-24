<?php
	include('../verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
	    include('../conexao.php');
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/SomaDivertida.css">
    <link rel="stylesheet" href="../css/dialogo.css">
    <title>Soma divertida</title>
</head>
<body> 
    <div class="img"> 
        <div class="container">
                <div>
                    <a href="exercicios_modulo1.php"><input type="submit" value="voltar"></a>
                    <p>&nbsp</p>
                </div>

                <div id="id01" class="modal">
                <div class="modal-content">
                    <br>
                    <!-- imput do Hidden Resultado  -->
                    <form action="../includes/soma_divertida_db.php" method="POST">
                        <input type="submit" id="btt_valida" class="close" value="Avançar">
                        <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                        <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                        <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                        <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                        <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>
                    </form>
                    <form action="../includes/soma_divertida_db.php" method="POST">
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
                          <p class="p1"> Para um primeiro teste temos essa somatoria, é importante encontrar a lógica na vertical, talvez isso ajude em algo ... TAMBÉM temos 5 tentativas então VOCÊ CONSEGUE!!! </p><br>
                        
                        </div>

                    </div>


            <div class="corpo">
                <div = class="quadrados">
                    <table>
                        <tr>
                            <td id="result1" class="quadrado" >Valor não calculado</th>
                            <td id="result2" class="quadrado">Valor não calculado</th>
                            <td id="result3" class="quadrado">Valor não calculado</td>
                        </tr>
                        <tr>
                            <td ><input id="numero1" class="dropzone" name="dopzone" type="text" required="required" pattern="[0-9]+$"></td>
                            <td ><input id="numero2" class="dropzone"  type="text" required="required" pattern="[0-9]+$"></td>
                            <td ><input id="numero3" class="dropzone"  type="text" required="required" pattern="[0-9]+$"></td>
                            <td id="result4">Valor não calculado</td>
                        </tr>
                    
                        <tr>
                            <td ><input id="numero4" class="dropzone"  type="text" required="required" pattern="[0-9]+$"></td>
                            <td ><input id="numero5" class="dropzone"  type="text" required="required" pattern="[0-9]+$"></td>
                            <td ><input id="numero6" class="dropzone"  type="text" required="required" pattern="[0-9]+$"></td>
                            <td id="result5" >Valor não calculado</td>
                        </tr>  
                          <!-- <td id="numero3"><div class="quadrado_teste" id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" > </div></td> -->
                    
                    
                    </table>
                </div>
            </div>
        
            <input type="submit" value="Validar" onclick="resultado()"> 
        </div>
    </div>
</body>

<script src="../js/script_somaDivertida.js" defer></script>
<script src="../js/dialogo_inicio.js" defer></script>
</html>