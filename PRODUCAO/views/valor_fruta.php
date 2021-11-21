
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
	    include('../conexao.php');
        include('../verifica_login.php');
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/valor_fruta.css">
    <title>Valor da fruta</title>
</head>
<body>
    <div class="img">
        <div class="container">
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
                       <td id="numero2" ><img src="../img/Cereja dupla.png" alt="Cereja"></td>
                       <td>+</td>
                       <td id="numero2"><img src="../img/Cereja dupla.png" alt="Cereja"></td>
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
                        <td><img src="../img/Cereja dupla.png" alt="Cereja"></td>
                        <td id="muda2">*</td>
                        <td><img src="../img/morango.png" alt="Morango"></td>
                        <td>=</td>
                        <td>&nbsp; &nbsp; &nbsp; <input id="valor" type="text" placeholder="Qual sera o resultado ?"></td>
                     </tr> 
                </table>
            </div>
        </div>    
    </div>
</body>

<script src="../js/script_fruta.js" defer></script>
</html>