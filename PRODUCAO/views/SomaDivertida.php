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
    <title>Valor da fruta</title>
</head>
<body> 
    <div class="img"> 
        <div class="container">
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
        
            <button onclick="recebe_valor()">Clicka</button>
        </div>
    </div>
</body>

<script src="../js/script_somaDivertida.js" defer></script>
</html>