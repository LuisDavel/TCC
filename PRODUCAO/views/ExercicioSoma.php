<?php
	include('../verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
<?php
	    include('../conexao.php');
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div id="fundo_background">
        <div class="container">

            <div class="conteudo">
                <div class="content_pergunta">

                    <table>
                        <tr>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>4</td>
                           <td>5</td>
                        </tr> 
                        <tr>
                            <th>6</th>  
                            <th>12</th>
                            <th> </th>
                            <th><inpt id="valor" type="text" placeholder="Resultado" onchange="resultado()"> </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<script>
    function fatora(){
       var b = (x + x1 + x2)
      var acerto = document.getElementById("text").value;
      console.log('Var função acerto: ' + acerto)
      if(b == acerto ){
        img.setAttribute('src', '../HOMOLOGA/img/heroi2.png')
        console.log('Var da função random: ' + (x + x1 + x2) + ' igual a B = ' + b)
        //document.getElementById("demo1").innerHTML = b
  
      }
    }

</script>