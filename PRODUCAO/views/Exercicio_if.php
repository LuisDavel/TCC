
<!DOCTYPE html>
<html lang="pt_br">
<head>
<?php
	    include('../conexao.php');
        include('../verifica_login.php');
?>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exercicioIf.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Aprendendo com escolhas</title>
</head>
<body>
    <div  class="img">
        <div class="container">
            <div class="acao" style="background-image: url('../img/Captura\ de\ tela\ 2021-10-10\ 154613.png');">
                <div class="dropzone" >
                    <p id="yy" value= "2"></p>
                    <!--<button onclick="abreVideo()" class="w3-button w3-black">A</button>-->
                </div>
            </div>
        <!-- VIDEO -->
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-teal"> 
                        <img  onclick="fecharVideo()" src="https://img.icons8.com/material-rounded/50/000000/back--v1.png"/> Refazer 
                        <h2></h2>
                    </header>
                    <div class="w3-container">
                      <video id="video" width="900" height="800" controls="controls">
                            <source src="../img/2021-08-12 20-04-26.mp4" type="video/mp4">
                      </video>
                    </div>              
                </div>
            </div>
        
            <div class="escolhas">
                <div class="dropzone" style="width: 80%; justify-content: inline;">
                
                    <img src="../img/21ab706902567bd0c10ba01c61d7541e-silhueta-do-icone-da-escada.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "1" style="width: 80px;" alt=" 1">
                    <div class="drag"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "2">
                        <img src="#" alt=" 2">
                    </div>
                
                    <div class="drag" id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "3">
                        <img src="#" alt=" 3">
                    </div>
                
                </div>
            </div>
            
        </div>
    </div>
    <script src="../js/ScriptIF.js" defer></script>


</body>
</html>