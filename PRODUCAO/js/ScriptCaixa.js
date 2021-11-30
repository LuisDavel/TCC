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
        img = event.target.getAttribute('value');
        //log('Valor da caixa ' + img)
       // log('valor do ITem: ' + valor)
        event.target.src = "../img/fechada.png";
        if(valor != img ){
            log('Valor da caixa ' + img)
            log('valor do ITem: ' + valor)
            //dragged.parentNode.preventDefault();
            event.target.style.border = "1px solid red"
        }
    }  

  }, false);

  var erro = 0;
  var acerto = 0;

  document.addEventListener("dragleave", function( event ) {
     
      if ( event.target.className == "dropzone" ) {
        event.target.style.border = "none"
        event.target.src = " ../img/caixa_feixada.png";
      }

    }, false);
    
    var cont = 0;
    var cont_caixa1 = 0;
    var cont_caixa2 = 0;
    var cont_caixa3 = 0;
    //var result_caixa1 = document.getElementById('p_result_caixa1');
    var result_caixa2 = document.getElementById('p_result_caixa2');
    var result_caixa3 = document.getElementById('p_result_caixa3');


    document.addEventListener("drop", function( event ) {
      
        if(valor != img ){
            event.target.src = " ../img/caixa_feixada.png";
            event.target.style.border = "none"
            erro += 1;
            console.log('erros: ' + erro)
        }else{
            //cont_caixa = 0;
            if(valor == 1 ){
                //cont_caixa = 0;
                cont_caixa1 += 1;
                document.getElementById('p_result_caixa1').innerText = cont_caixa1;
            }else if(valor == 2  ){
               // cont_caixa = 0;
                cont_caixa2 += 1;
                document.getElementById('p_result_caixa2').innerText = cont_caixa2;
            }else if(valor == 3  ){
                //cont_caixa = 0;
                cont_caixa3 += 1;
                document.getElementById('p_result_caixa3').innerText = cont_caixa3;
            }      
        }

        event.preventDefault();
   
        if ( event.target.className == "dropzone" ) {
            event.target.style.border = "none"
            event.target.src = " ../img/caixa_feixada.png";
            log('DOPREI: ' + valor)
            cont += 1;
            
            console.log("cont" + cont)
            if(cont == 5){
               acerto = cont - erro;
               if(acerto > erro){
                     result_value = document.getElementById("id_result");
                     result_value.setAttribute("value", 10)  ;
                    abreVideo()
               }else{

                     btt_refaz = document.querySelector("#btt_refaz");
                     btt_refaz2 = document.querySelector("#btt_refaz2");

                     btt_refaz2.setAttribute('type', 'submit');
                     btt_refaz.setAttribute('type', 'hidden');

                     video_link = document.querySelector("#video_link");
                     btt = document.querySelector("#btt_valida");
                    
                     video_link.setAttribute('src', '../img/errei.mp4');
                     btt.setAttribute('type', 'hidden');

                     abreVideo();
               }
            }
            //event.target.style.background = "";
            dragged.parentNode.removeChild( dragged );
            event.target.appendChild( dragged );
        }
    
    }, false);

// N MEXER NELE 

    document.addEventListener("drop", function( event ) {

        event.preventDefault();

        if ( event.target.className == "dropzone2" ) {
            event.target.style.border = "none"
            event.target.src = " ../img/caixa_feixada.png";
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
    