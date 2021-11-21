
<html>
  <head>
  <?php
	    include('../conexao.php');
  ?>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title>Labi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style_maze.css">
  
    <script src="../js/util.js"></script>
    <script src="../js/maze.js"></script>
  </head>

<body>
  <div class="img">  
    <div class="container">

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
                <div>Start</div> 
                  <div class="keys">Me ajude a chegar ao destino</div> 
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
          <p>De comando ao heroi!</p>
          <input type="text" id="campo" placeholder="Vá para frente, para atrás">
          <br><br>
          <p>Comandos utilizados:</p>
          <textarea id="alltext"></textarea>
        </div>


      </div>
     
      
    </div>
  </div>
    
  <audio id="ding" src="../common/ding.mp3"></audio>
</body>
</html>


<script>
  var campo = document.getElementById("campo");
  var text = document.getElementById("alltext");
  temporiza = 0;

  
  $("#campo").on("input", function(){
    clearTimeout(temporiza);
    temporiza = setTimeout(function(){
      
      keyup();
    }, 500);
  });

  function addLista(){
    var insertText = $('#campo').val();
    $('#alltext').append(insertText + '\n');
  }


  function keyup(){
    console.log(campo.value.toLowerCase());

    if(campo.value == ''){
        return;
      }  
  
      switch (campo.value.toLowerCase()) {
        case 'esquerda':
         // addText(this)
         addLista()
          campo.value = '';
          move(-1, 0);
          break;
        case 'direita':
          addLista()
          move(1, 0);
          campo.value = '';
          break;
        case 'cima':
          addLista()
          move(0, -1);
          campo.value = '';
          break;
        case 'baixo':
          addLista()
          move(0, 1);
          campo.value = '';
          break;
        default:
          return;
      }
      //campo.preventDefault();
  }

  // function addText() {
  //     var targ = this.target || this.srcElement;
  //     document.getElementById("alltext").value += targ.innerText;
  // }

</script>