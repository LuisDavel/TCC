<html>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title>Labi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style_maze.css">
  
    <script src="../js/util.js"></script>
    <script src="../js/maze.js"></script>
    <script src="../js/dialogo_inicio.js" defer></script>
  </head>

<body>
                    <div id="id01" class="modal">
                        <div class="modal-content">
                            <br>
                            <!-- imput do Hidden Resultado  -->
                            <form action="../includes/exercicio_soma_db.php" method="POST">
                                <input type="submit" id="btt_valida" class="close" value="Avançar">
                                <input type="hidden"  value="" name="nota" id="id_result"  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>                              
                            </form>  
                            <form action="../includes/exercicio_soma_db.php" method="POST">
                                <input type="hidden"  value="" name="nota" id=""  readonly>
                                <input type="hidden"  value="modulo_1" name="modulo" id="modulo"  readonly>
                                <input type="hidden"  value="exercicio_soma" name="exercicio_soma" id="exercicio"  readonly>
                                <input type="hidden"  value="" name="valida_exercicio" id="valida_exercicio"  readonly>
                                <input type="hidden"  value="<?php echo $_SESSION['id'] ?>" name="id_usuario" id="id_usuario"  readonly><br>  
                                <input type="submit" value="Refazer" onclick="fecharVideo()" >                            
                            </form>  
                            
                            <br>
                            <div>
                               <video id="video" width="900" height="800">
                               <source id="video_link" src="../img/vide_conclusao.mp4" type="video/mp4">
                            </div>
                        </div>

                    </div>

  <div class="img">  
    <div class="container">
      <div>
          <a href="exercicios_modulo2.php"><input type="submit" value="voltar"></a>
          <p>&nbsp</p>
      </div>

      <div id="options" style="opacity: 0%;">
        <select id="difficulty">
          <option value=0>Easy</option>
          <option value=1>Normal</option>
          <option value=2>Hard</option>
        </select>
      </div>
   
      <div class="corpo">
        <div class="center">
           <div id="startDiv" >
               <button id="start"> 
                <div></div> 
                  <div class="keys">Aperte ENTER para começar</div> 
                  <div class="keys">Leia o trecho a esquerda --></div> 
                </button> 
           </div> 

           <div class="labirinto">
             <svg id="landscape" xmlns="http://www.w3.org/2000/svg">
               <g id="wallLayer"></g>
               <g id="goalLayer"></g>
               <g id="avatarLayer"></g>
             </svg>
           </div>
           
          
        </div>
        
        <div>
          <form id="myForm">
            <p>De comandos ao heroi!</p>
            <input type="text" id="campo" placeholder="Vá para cima, para baixo"> 
            <input class="bttn" type="button" onclick="gerar()" value="Rodar">
          </form>
          
          <br><br>
          <p>Comandos utilizados:</p>
          <textarea id="alltext"></textarea>
        </div>


      </div>
      <textarea style="width: 400px;" readonly> -- COMANDOS PARA FAZER O HEROI ANDAR  --
      - Cima (para ir para cima)
      - Baixo (para ir para baixo)
      - Esquerda (para ir para esquerda)
      - Direita (para ir para direita)
      *Você pode mandar vários comandos separando por virgula.
      Ex:. Cima, Baixo, Direta, Cima
      </textarea>
      
    </div>
  </div>
    
  <audio id="ding" src="../common/ding.mp3"></audio>
</body>
</html>


<script>



  function addLista(){
      var insertText = $('#campo').val();
      $('#alltext').append(insertText + '\n');
  }


  function gerar(){
    
    

    var campo = document.getElementById('campo').value.toLowerCase();

    if (campo == '' || campo == ' '){
      return;
    }

 	  var Array =  campo.split(",");
       
    for(var i = 0; i < Array.length; i++){
	  	//console.log(Array[i])
 	    var	a = (Array[i].trim());
    
      if(a == 'esquerda'){
        move(-1, 0);
      }else if(a == 'direita'){
        move(1, 0);
          
      }else if(a == 'cima'){
        move(0, -1);
      }else if(a == 'baixo'){
        move(0, 1);
      }
	  }
   
    addLista();
    document.getElementById("myForm").reset();
  console.log(Array)
}



</script>