<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- <style>
            body {
                background-color: bisque;
                text-align: center;
            }
            form {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            #inputBox {
                width: 200px;
                height: 50px;
            }
        </style> -->

<style>
        body{
            background-color: bisque;
            display: inline-flex;
            text-align: center;
        }

            #inputBox {
                width: 200px;
                height: 50px;
            }

        form{
            position: absolute;
            display: flex;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        #inputBox{
            width: 200px;
            height: 50px;
        }
        .card{
            background-color: #fff;
            max-width: 400px;
            display: flex;
            flex-direction:column;
            overflow: hidden;
            border-radius: 2rem;
            box-shadow: 0px 1rem 1.5rem rgba(0,0,0,0.5);
        }

        .banner{
         background-image: url("https://media.istockphoto.com/photos/portrait-of-mid-adult-mens-play-go-board-game-picture-id1058376190?k=20&m=1058376190&s=612x612&w=0&h=ht-TfX7VhxVHH-Mk_t2d171LTCKKvAFOAyHQ4Z-uFEE="); 
         background-size: cover; 
         display: flex;
         justify-content: center;
        }

        .profile{
        width: 8rem;
        height: 8rem;
        background-image: url("https://media.istockphoto.com/vectors/go-game-stone-group-baduk-ko-rule-position-vector-id1046087184?k=20&m=1046087184&s=612x612&w=0&h=ap-x-5Fs0sVNcXnfh4u9TYzpLXkVByDGaTx4XVIR5vE=");
        background-size: cover;
        border-radius: 50%;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
        transform: translateY(50%);
        transition: transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
        }
        .profile:hover {
            transform: translateY(50%) scale(1.3);
        }
        .name {
            text-align: center;
            padding-top: 80px ;
        }
        .login_btn{
            padding: 0.2 rem;
            justify-content: center;
        }

        
    </style>

    </head>
    <body>
        <form method="post" action="/index.php/game/board_create">
            <div>방만들기</div><br/><br/>
            방이름
            <input type="text" name="title" class="inputBox"><br/><br/>
            <div>동 색
                <select name="color">
                    <option value="0">백돌</option>
                    <option value="1">흑돌</option>
                </select>
            </div>
            <br/><br/>
            <input type="submit" value="방 만들기" class="btn btn-warning active"><br/><br/>
            <a href="/index.php/game/game_list">뒤로가기</a>
        </form>
    </body>
</html>