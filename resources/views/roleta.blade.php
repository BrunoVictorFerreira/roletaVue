<html>
<head>
<style>
    #roleta{
    }
    
    #seletor{
        position:absolute;
        top: 0;
        left: 300px;
        z-index: 100;
    }

    .seletorAfter{
        animation: seletor 0.125s linear 40;  
    }
    @keyframes seletor{
        0%{
            transform: rotate(0deg);
        }100%{
            transform: rotate(20deg);
        }
    }
    @keyframes seletorAfter{
        0%{
            transform: rotate(0deg);
        }100%{
            transform: rotate(20deg);
        }
    }
    @keyframes roleta{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(-360deg);
        }
    }
</style>
<link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
</head>
<body>
    <div id="app">
        <seletor id="seletor"></seletor>
        <roleta id="roleta"></roleta>
    </div>
    <script src="{{elixir('js/app.js')}}"></script>
    <script>
    var numeroRandomico = Math.floor((Math.random() * 361) + 1);
    console.log(numeroRandomico);
    // setInterval(function(){
    //     console.log(Math.floor(((Math.random() * 361) + 1) * -1));
    // },1000)
    var roleta = document.getElementById("roleta");
    var seletor = document.getElementById("seletor");
    roleta.addEventListener("click", function(){
        seletor.style.animation = "seletor 0.125s linear 40";
        roleta.style.animation = "roleta 1s linear 5";
        setTimeout(function(){
            seletor.style.animation = "seletorAfter 0.700s linear 8";
            roleta.style.transition = "transform 5s ease-out";
            roleta.style.transform = "rotate(-"+(360+numeroRandomico)+"deg)";
        },5015)
        setTimeout(function(){
            retornarMensagem(numeroRandomico);
        }, 11000);
    })
      
    function retornarMensagem(numeroRandomico){
        if(numeroRandomico > 0 && numeroRandomico <= 43){
            alert("Parabéns! Você ganhou 10% de desconto");
        }else if(numeroRandomico > 43 && numeroRandomico <= 87){
            alert("Parabéns! Você ganhou 3% de desconto");
        }else if(numeroRandomico > 87 && numeroRandomico <= 129){
            alert("Parabéns! Você ganhou 5% de desconto");
        }else if(numeroRandomico > 129 && numeroRandomico <= 176){
            alert("Infelismente não foi dessa vez");
        }else if(numeroRandomico > 176 && numeroRandomico <= 226){
            alert("Parabéns! Você ganhou 5% de desconto");
        }else if(numeroRandomico > 226 && numeroRandomico <= 269){
            alert("Parabéns! Você ganhou 3% de desconto");
        }else if(numeroRandomico > 269 && numeroRandomico <= 309){
            alert("Parabéns! Você ganhou 10% de desconto");
        }else{
            alert("Infelismente não foi dessa vez");
        }
    }
    

        
    </script>
</body>
</html>