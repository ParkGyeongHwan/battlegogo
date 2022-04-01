<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
        </script>

        <style>
            
        div{
            display: inline-block;
        }
        html, body {
            width: 100%;  
            height: 100%;
            background: bisque;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: center;
            align-items: center;
        } 

        form{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        #waitpage{
            font-size: xx-large;
        }

        #inputBox{
            width: 200px;
            height: 50px;
        }
        </style>
    </head>
    <body>
    <form method="post" action="/index.php/game/play">
        <div id="waitpage">상대방 기다리는 중</div><br /><br /> 
        <div class="row col-15 mb-3 mt-3">
            <input type="button" value="방폭파" onClick="location.href='/index.php/game/game_list'" class="btn btn-warning active" ><br /><br />
            <input type="submit" value="게임화면 이동하기" class="btn btn-warning active">
        </div>
    </form>
    </body>
</html>