<!DOCTYPE html>
<html lang="pt_br">
<head>
        
<?php
	    include('../conexao.php');
        $id = $_GET['id'];
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="img">
        <div class="container">
            <div class="corpo">

                <form action="../includes/cadastro_nome_heroi_db.php" method="POST">
                    <br>
                    <br>
                    <br>
                    <div >
                        <input type="checkbox" class="herois" id="heroi1" name="tp_heroi" value="check" onclick="check(this)">
                        <label for="heroi1"><img id="z1" src="../img/heroi.png" alt="" style="height: 300px; width: 250px;" ></label>
                        <input type="checkbox" class="herois" id="heroi2"  onclick="check(this)">
                        <label for="heroi2"><img id="z1" src="../img/heroi2.png" alt="" style="height: 300px; width: 250px;"></label>
                        <input type="hidden"  value="<?php echo($id); ?>" name="id_heroi"  readonly>

                    </div>
                    <p class="p1" style="font-size: 30px;"> Agora escolha o seu heroi mentor e nos diga o seu codinome de heroi. </p>
                    <input class="input_pergunta" type="text" placeholder="Digite seu nome de  heroi..." id="nome_heroi" name="nome_heroi"> 
                    <br>
                    <br>
                    <input type="submit" value="Este sou eu "> 
                </form>

            </div>
        </div>
    </div>
</body>
</html>


<script>


    function check(event){
        let herois = document.querySelectorAll(".herois")

        let classname =  event.target.className;

        console.log(classname)

        event1 = event.checked
        
        // if(ee == herois){
        //     console.log(herois)
            


        // }


        if(event1){
           
            
        }else{

            event.style.display = 'none'
        }
        //document.getElementById("submit").removeAttribute("disabled");


    }


</script>