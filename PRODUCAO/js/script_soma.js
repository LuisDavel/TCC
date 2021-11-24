window.addEventListener('load', (event) => {
    random(); // ABRE A FUNÇÃO RANDOM
});


function msg (msg){
    console.log ('=>:  ' + msg)
}

var conta_erro = 0;
var conta_acerto = 0;
var tentativa = 0;


function random() {
    result_final = 0;
    a = 0;
    b = 0;
    c = 0;
    d = 0;
    e = 0;
    f = 0;
    w = 0;
    g = 0;
    h = 0;

    for(var i = 1; i< 9; i++){
        x = Math.floor((Math.random() * 5) + 1);
        //console.log(x)
        
        if(i == 1){
            y =    x;
            a = x;
            //msg('If' + i +' ' + a) 

        }else if(i == 2){

            var y =    x;
            b = x;
            //msg('If' + i +' ' + b)  
        }else if(i == 3){
            var y =   x;
        
            c = x;
            //msg('If' + i +' ' + c)  
        }else if(i == 4){
            var y =    x;
            
            d = x;
            //msg('If' + i +' ' + c)  
        }else if(i == 5){
            var y =  x;
          

            e = x;
            //msg('If' + i +' ' + c)  
        }else if(i == 6){
            var y =   x;
    
            f = x;
            //console.log(y + ' 6 ')  
        }else if(i == 7){
            var y =  a + d;
           
            g = y;
            //msg('If' + i +' ' + c)  
        }else if(i == 8){
            var y = b + e;
           

            h = x;
            //msg('If' + i +' ' + c)  
        }
           
            //msg('If' + i +' ' + c)  
    
    
        document.getElementById("result" + i).innerHTML = y;
    }

    result_final = c+f;
}


function resultado(){
  
    //abreVideo();
    var tentativa_text = document.getElementById('paragrafo_tentativa');
    var valor =  document.getElementById('valor').value;
    if(valor != ''){
        if(tentativa != 5){
            if(result_final == valor){
                tentativa += 1;
                tentativa_text.innerText = tentativa + " / 5"
               // alert(valor);
                conta_acerto =  conta_acerto + 1;
                msg('Acertos + ' + conta_acerto)
                msg('-----------------------')
                random();
                msg(tentativa)
            }else if(result_final != valor){
                tentativa += 1;
                tentativa_text.innerText = tentativa + " / 5"
              //  alert(valor);
                conta_erro = conta_erro + 1;
                msg('Erros + ' + conta_erro)
                msg('-----------------------')
                random();
                msg(tentativa)
            }
            document.getElementById("valor").value = "";
        }else{
            msg('certo: '  + conta_acerto + ' ' + ' Errado: ' + conta_erro)
            if(tentativa == 5){
                if(conta_acerto >= 3 && conta_acerto < 5){
                    //alert('Chupa cu');
                    result_value = document.getElementById("id_result");
                    result_value.setAttribute("value", 6)  ;
                    abreVideo();
        
                }else if( conta_acerto < 3  ){
                    //alert('vai fazer dnv');

                    video_link = document.querySelector("#video_link");
                    btt = document.querySelector("#btt_valida");

                    video_link.setAttribute('src', '../img/errei.mp4');
                    btt.setAttribute('type', 'hidden');

                    result_value = document.getElementById("id_result");
                    result_value.setAttribute("value", 1);


                    abreVideo();
                    //location.reload();
        
                }else if(conta_acerto == 5 ){
                    result_value = document.getElementById("id_result");
                    result_value.setAttribute("value", 10) ;    
                    abreVideo();
                }
        
            }        
        }
    }
}

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
