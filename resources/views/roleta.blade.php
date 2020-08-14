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
<link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
</head>
<body>
    <div id="app">
        <roleta></roleta>
    </div>
    <script src="{{elixir('js/app.js')}}"></script>
    
</body>
</html>