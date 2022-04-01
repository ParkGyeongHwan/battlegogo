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
        body{
        background-color: bisque;
        display: inline-flex;
        text-align: center;
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

        h2 {
        height: 100px;
        }

        h2 span {
                position: relative;
                top: 10px;
                display: inline-block;
                animation: bounce .3s ease infinite alternate;
                font-family: 'Titan One', cursive;
                font-size: 40px;
                color: #FFF;
                text-shadow: 0 1px 0 #CCC,
                    0 2px 0 #CCC,
                    0 3px 0 #CCC,
                    0 4px 0 #CCC,
                    0 5px 0 #CCC,
                    0 6px 0 transparent,
                    0 7px 0 transparent,
                    0 8px 0 transparent,
                    0 9px 0 transparent,
                    0 10px 10px rgba(0, 0, 0, .4);
            }

                h2 span:nth-child(2) { animation-delay: .1s; }
                h2 span:nth-child(3) { animation-delay: .2s; }
                h2 span:nth-child(4) { animation-delay: .3s; }
                h2 span:nth-child(5) { animation-delay: .4s; }
                h2 span:nth-child(6) { animation-delay: .5s; }
                h2 span:nth-child(7) { animation-delay: .6s; }
                h2 span:nth-child(8) { animation-delay: .7s; }

            @keyframes bounce {
            100% {
                top: -20px;
                text-shadow: 0 1px 0 #CCC,
                    0 2px 0 #CCC,
                    0 3px 0 #CCC,
                    0 4px 0 #CCC,
                    0 5px 0 #CCC,
                    0 6px 0 #CCC,
                    0 7px 0 #CCC,
                    0 8px 0 #CCC,
                    0 9px 0 #CCC,
                    0 50px 25px rgba(0, 0, 0, .2);
                }
            }

            .wait_font{
            transform: translate(3%, 50%);
            margin-bottom: 80%;
            }

        </style>
    </head>
    <body>
    <form method="post" action="/index.php/game/play">
    <div class="wait_font">
        <h2 id="waitpage">
            <span>상</span>
            <span>대</span>
            <span>방</span>
            <br /><br />
            <span>기</span>
            <span>다</span>
            <span>리</span>
            <span>는</span>
            <span>중</span>                    
            <span>...</span>                    
        </h2>
    </div>

        <div class="row col-15 mb-3 mt-3">
            <input type="button" value="방폭파" onClick="location.href='이동할페이지'; class="btn btn-warning active" ><br /><br />
            <input type="submit" value="게임화면 이동하기" class="btn btn-warning active">
        </div>
    </form>
    </body>
</html>