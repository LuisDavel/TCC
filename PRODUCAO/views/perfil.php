<?php
	    include('../conexao.php');
        include('../verifica_login.php');



// SALVA DADO DO ID DE QM LOGOU
        $id = $_SESSION['id'];


// SELECT PARA VERIFICAR O TIPO DE HEROI ESCOLHIDO        
        $sql = "SELECT tp_heroi FROM USUARIO WHERE CD_USUARIO = " . $id;
        $retorno = mysqli_query($con, $sql);

// SELECT PARA VERIFICAR SOMA DE PONTOS INSIGNIA

        $sql_usuario = "SELECT ds_nome_heroi,ds_email,dt_nascimento FROM USUARIO WHERE CD_USUARIO = " . $id;
        $retorno_usuario = mysqli_query($con, $sql_usuario);


?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    
    <title>Cadastro</title>
</head>
<body>
    <div class="img">
        <div class="container">
            <div class="corpo" style="height: 700px;">

                <form method="POST" action="index.php">
                    <br>
                    <br>
                    <br>
                    <div >
                        <!-- src="https://image.flaticon.com/icons/png/512/17/17004.png"-->
                        
                    </div>
                    <p class="p1" style="font-size: 20px;"> Mentor</p> 
                    <?php

                        while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                            
                    //IDENTIFICA O HEROI ESCOLHIDO      
                            if($item['tp_heroi'] == "F") {  
                                    
                    ?>

                        <img src="../img/Rosto_girls.png" alt="Girl" style="height: 125px; width: 125px;">  
                                        
                    <?php
                            
                        }else{

                    ?>
                        <img src="../img/Rosto_heroi.png" alt="Boy" style="height: 125px; width: 125px;"> 
                                    
                    <?php   
                        }
                    }  
                        
                    ?>
                    
                    <p class="p1" style="font-size: 30px;"> Dados do herói</p> 
                  
                    <label class="label_class" for="data">Nome do herói: </label><br>
                    <?php

                        while($item_usuario = mysqli_fetch_array($retorno_usuario, MYSQLI_ASSOC)) {
                                    
                    ?>
                    <input class="input_pergunta" required type="text" value="<?php echo $item_usuario['ds_nome_heroi']; ?>" name="nome_heroi" id="nome_heroi" readonly> 
                    <br>
                    <input class="input_date" id="data" required type="date" value="<?php echo $item_usuario['dt_nascimento']; ?>" name="nasc" id="nasc" readonly/><br>
                    <br>
                    <input class="input_pergunta"  required type="text" value="<?php echo $item_usuario['ds_email']; ?>" name="email" id="email">                 
                    <input type="hidden"  value="<?php echo($id); ?>" name="id_heroi"  readonly>
                    <br>
                    <br>
                    <input type="submit" value="voltar"> 
                </form>
                <?php   
                        }  
                     ?>
            </div>
        </div>
    </div>
</body>
</html>


<script src="../js/dialogo.js" defer> </script> 
