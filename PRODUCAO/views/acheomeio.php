<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include('../conexao.php');
        $id = $_SESSION['id'];
    ?>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exerciciomeio.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Aprendendo com escolhas</title>
</head>
<body>
    <div  class="img">
             
        <div class="container">
            
           

            <div class="acao">
                    <table>
                        <tr>
                           <td><img src="../img/exec_1.png" alt=""> </td>
                          
                           <td><img class="dropzone" src="../img/exec_1_Nsei.png" id="yy" value= "1" alt=""></p></td>
                        </tr>
                        <tr>
                            <td><img src="../img/exec_2.png" width="430px" height="147px" alt=""> </td>
                          
                            <td><img class="dropzone" src="../img/exec_1_Nsei.png" id="yy" value= "2" alt=""></p></td>
                        </tr>
                    
                    </table>
                    
                    
                    <!--<button onclick="abreVideo()" class="w3-button w3-black">A</button>-->
            </div>
        <!-- VIDEO -->
            

        <div id="id01" class="modal">
                <div class="modal-content">
                    <br>
                    <!-- imput do Hidden Resultado  -->
                    <form action="../includes/acheomeio_db.php" method="POST">
                        <input type="submit" id="btt_valida" class="close" value="Avançar">
                        <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                        <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                        <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                        <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                        <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>
                    </form>
                    <form action="../includes/acheomeio_db.php" method="POST">
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

            <div>
                <a href="exercicios_modulo2.php"><input type="submit" value="voltar"></a>
                <p>&nbsp</p>
               
            </div>

            <div class="escolhas">
               
                <div class="dropzone2" style="width: 80%; justify-content: inline;">
                
                    <img src="../img/result_1.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "2" style="width: 80px;" alt=" 1">

                    <img src="../img/result_2.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "1" style="width: 80px;" alt=" 1">

                    <img src="../img/result_3.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "0" style="width: 80px;" alt=" 1">  
                                        
                
                </div>
            </div>
            
        </div>
    </div>
    <script src="../js/ScriptImeio.js" defer></script>


</body>
</html>