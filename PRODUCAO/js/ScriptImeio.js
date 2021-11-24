const video = document.getElementById('video');

var dragged;

/* LOGS */
function log(message) {
    console.log('> ME DIGA:  ' + message)
}
 
  document.addEventListener("drag", function( event ) {
    //console.log(valor_item)
    valor = event.target.getAttribute('value')
    log(valor)
  }, false);

  document.addEventListener("dragstart", function( event ) {
    if ( event.target.id != "draggable" ) {
        event.preventDefault();
        return log('nume é');            
      }
  
      dragged = event.target;
                  
      event.target.style.opacity = .5;
  }, false);

  document.addEventListener("dragend", function( event ) {
      
      event.target.style.opacity = "";
  }, false);

 
  document.addEventListener("dragover", function( event ) {

      event.preventDefault();
  }, false);

  document.addEventListener("dragenter", function( event ) {

      if ( event.target.className == "dropzone" ) {
      //    event.target.style.background = "purple";
        img = event.target.getAttribute('value');
     }

  }, false);

  var erro = 0;
  var acerto = 0;

  document.addEventListener("dragleave", function( event ) {
     
      if ( event.target.className == "dropzone" ) {
          event.target.style.background = "";
      }

  }, false);
  var cont = 0;

  document.addEventListener("drop", function( event ) {
    if(valor != img ){
        
        erro += 1;
        console.log('erros: ' + erro)
    }

     
      event.preventDefault();
   
      if ( event.target.className == "dropzone" ) {
        cont += 1;
        console.log("cont" + cont)
        if(cont == 2){
            acerto = cont - erro;
            if(acerto > erro){
                result_value = document.getElementById("id_result");
                result_value.setAttribute("value", 10)  ;
               abreVideo()
             }else{
                video_link = document.querySelector("#video_link");
                btt = document.querySelector("#btt_valida");
                result_value = document.getElementById("id_result");
                result_value.setAttribute("value", 0)  ;
                btt_refaz = document.querySelector("#btt_refaz");
                btt_refaz2 = document.querySelector("#btt_refaz2");
                btt_refaz2.setAttribute('type', 'hidden');
                btt_refaz.setAttribute('type', 'submit');
                video_link.setAttribute('src', '../img/errei.mp4');
                btt.setAttribute('type', 'hidden');
                abreVideo();
          }
        }
        

            log('DOPREI: ' + valor)
            
          //event.target.style.background = "";
          dragged.parentNode.removeChild( dragged );
          event.target.appendChild( dragged );
      }
    
  }, false);


function abreVideo() {
    document.getElementById('id01').style.display='block';
    video.autoplay = true;
    video.load();
}

function fecharVideo() {
    document.getElementById('id01').style.display='none';
    video.autoplay= false;
    video.load();
    location.reload();
}