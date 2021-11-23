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

      //if ( event.target.className == "dropzone" ) {
      //    event.target.style.background = "purple";
    //  }

  }, false);

  document.addEventListener("dragleave", function( event ) {
     
      if ( event.target.className == "dropzone" ) {
          event.target.style.background = "";
      }

  }, false);

  document.addEventListener("drop", function( event ) {
     
      event.preventDefault();
   
      if ( event.target.className == "dropzone" ) {
         
        if(valor == 1){
            result_value = document.getElementById("id_result");
            result_value.setAttribute("value", 10)  ;
            abreVideo();
            //log('DOPREI: ' + valor)
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