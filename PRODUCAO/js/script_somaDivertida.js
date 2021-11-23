/// --- SEMPRE QUE A JANELA INICIAR
let documento =  document.getElementsByClassName("dopzone");
a1 = 0;
b1 = 0;
c1 = 0;
d1 = 0;
e1 = 0;
f1 = 0;
f = 0;

a = 0;
b = 0;
c = 0;
d = 0;
e = 0;

window.addEventListener('load', (event) => {
    random(); // ABRE A FUNÇÃO RANDOM
});

var conta_erro = 0;
var conta_acerto = 0;
var tentativa = 0;

function msg (msg){
    console.log ('=== >:  ' + msg)
}


// RANDOMIZA
function random() {
    result_final = 0;

    for(var i = 1; i< 4; i++){

        x = Math.floor((Math.random() * 5) + 1);
        //msg('random: '+x)
        
        if(i == 1){
            a = x;
            msg('If numero '+i+': '+ a )
           // msg('');
            document.getElementById("result" + i).innerHTML = x;
        }else if(i == 2){
            b = x;
           document.getElementById("result" + i).innerHTML = x;
           msg('If numero '+i+': '+ b )
           // msg('');
        }else if(i == 3 ){
            
            c = x ;
            msg('If numero '+i+': '+ c )
           
            //msg('If numero '+i+' com a soma: '+ c )
           // msg('');
           // msg('q ? ' + c+b);
            document.getElementById("result" + i).innerHTML = c;
        }

            d = a; 
            //msg('If numero '+i+': '+ d )    
           // msg('');
            document.getElementById("result" + 4).innerHTML = d;
        
            e = b + c;
           // msg('If numero '+i+': '+ e )
            //msg('');
            document.getElementById("result" + 5).innerHTML = e;
        

        
        //document.getElementById("result" + i).innerHTML = x;
        //msg(x)
       
    }
    
    result_final = a + b + c + d + e
    
    msg('Result Final ' + result_final)

    //document.getElementById('result_final').innerHTML = result_final
    
}
var soma_final = 0
// CALCULAR PRA VER SE ACERTOU
function recebe_valor(){
    nan1 = 0;
    for(var i = 1; i < 7; i++){
        o = parseInt(document.getElementById("numero" + i).value);
    
        if(i == 1){
            a1 = o;
        }else if(i == 2){
            b1 =  o ;
        }else if(i == 3){
            c1 =  o; 
        }else if(i == 4){
            d1 = o;
        }else if(i == 5){
            e1 =  o;
        }else if(i == 6){
            f1 =  o;
        }

    }
   
    

    (a1 + d1 ) == a ? (
        document.getElementById('numero1').style.borderColor = 'green',
        document.getElementById('numero4').style.borderColor = 'green',   
      
        msg('resultados modificado: ' + (a1 + d1))
    ): (
        document.getElementById('numero1').style.borderColor = 'red',
        document.getElementById('numero4').style.borderColor = 'red',
        msg('resultados modificado: ' )
    );
    
    (b1 + e1) == b ? (
        document.getElementById('numero2').style.borderColor = 'green',
        document.getElementById('numero5').style.borderColor = 'green',
          
        msg('resultados modificado: '  + (b1 + e1))
    ) : (
        document.getElementById('numero2').style.borderColor = 'red',
        document.getElementById('numero5').style.borderColor = 'red',
        msg('resultados modificado: ')
    );

    (c1 + f1) == c ? (
        document.getElementById('numero3').style.borderColor = 'green',
        document.getElementById('numero6').style.borderColor = 'green',  
       
        msg('resultados modificado: '  + (c1 + f1))
    ) : (
        document.getElementById('numero3').style.borderColor = 'red',
        document.getElementById('numero6').style.borderColor = 'red',
        msg('resultados modificado: ' + (c1 + f1))
    );

    
    soma_final =  (a1 + b1 + c1 + d1 + e1 + f1);

    


}
 
/////////////////////////////////// DPS VEJo

var temporiza;

$(".dropzone").on("input", function(){
    clearTimeout(temporiza);
    temporiza = setTimeout(function(){
       recebe_valor();
      //  valida_conteudo(); // FUNçÃO A SER DISPARADA
    }, 500);
 });

 var valor = 0;

function resultado(){
    msg(soma_final);
    msg(valor);
    if(soma_final == (result_final/2)){

        valor = result_final
        msg(valor);
       
        msg((result_final/2));
        
    }

    if(soma_final != (result_final/2)){
        valor = 2;
        if(valor != ''){
            video_link = document.querySelector("#video_link");
            btt = document.querySelector("#btt_valida");

            video_link.setAttribute('src', '../img/errei.mp4');
            btt.setAttribute('type', 'hidden');


            abreVideo();
        }
       
    }

    //abreVideo();
    if(valor != ''){
        if(valor == result_final){
            result_value = document.getElementById("id_result");
            result_value.setAttribute("value", 10)  ;
            abreVideo();
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
