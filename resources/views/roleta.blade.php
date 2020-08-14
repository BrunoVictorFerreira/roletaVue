<html>
<head>
<style>
    #roleta{
        animation-name: roleta;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
        animation-timing-function: cubic-bezier(0, 0, 0, 0);
    }
    @keyframes roleta{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
</style>
</head>
<body>
    <img src="{{asset('storage/seletor.svg')}}" style="position:absolute;top: 0;left: 300px;z-index: 100">
    <img src="{{asset('storage/roleta.svg')}}" id="roleta">

    <script>
        setTimeout(function(){
            document.getElementById("roleta").style.animationIterationCount = "inherit";
        },2000);
    </script>
</body>
</html>