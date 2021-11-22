<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/soma.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="fundo_background">
        <div class="container">

            <div class="conteudo">
                    <div id="id01" class="modal">
                        <div class="modal-content">

                            <div class="close" onclick="fecharVideo()" >&times; Refazer</div><br><br>

                            <br>
                            <!-- imput do Hidden Resultado  -->
                            <form action="../includes/valor_fruta_db.php" method="POST">
                                <input type="submit" class="close" value="Avançar">
                                <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_fruta" name="exercicio_fruta" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly>
                            </form>
                            <br>
                            <div>
                               <video id="video" width="900" height="800">
                               <source src="../img/vide_conclusao.mp4" type="video/mp4">
                            </div>
                        </div>

                    </div>
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
                           <td id="result"></td>
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

<script src="../js/script_soma.js" defer></script>

