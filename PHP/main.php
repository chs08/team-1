<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
        }

        body {
            background: radial-gradient(114.86% 167.01% at -14.86% 114.36%, #3164F7 0%, #FFFFFF 44.19%, #FFFFFF 74.38%, #B1F4CF 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        header {
            height: 10vh;
            width: 100vw;
            background-color: white;
            border-bottom: 1px solid #9A9A9A;
            display: flex;
            align-items: center;
        }

        .main {
            position: relative;
            height: 100vh;
            width: 100vw;
            display: fixed;
            flex-direction: row;
            justify-content: flex-start;
        }


        header {
            /* Frame 22 */

            box-sizing: border-box;

            position: absolute;
            width: 1440px;
            height: 80px;
            left: 0px;
            top: -2px;

            background: #FFFFFF;
            border-bottom: 1px solid #9A9A9A;

        }

        article {
            height: 150px;
            margin-top: 50px;
        }

        #logo {
            font: bold;
            font-size: 38px;
            margin-left: 50px;
        }



        #signUp {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            gap: 10px;


            position: absolute;
            width: 168px;
            height: 36px;
            left: 1248px;
            top: 22px;
            color: white;

            background: #3265F8;
            border-radius: 10px;
        }

        #logIn {
            /* 로그인 */

            position: absolute;
            width: auto;
            height: 18px;
            left: 1181px;
            top: 30px;

            font-style: normal;
            font-weight: 600;
            font-size: 15px;
            line-height: 18px;

            color: #545454;
            text-decoration: none;


        }

        #start {
            /* Rectangle 6 */

            position: absolute;
            color: white;
            width: 204px;
            height: 48px;
            left: 618px;
            top: 504px;

            background: #3265F8;
            border-radius: 10px;

            text-decoration: bold;

        }

        #text {
            position: absolute;
            width: 512px;
            height: 183px;
            left: 464px;
            top: 297px;
            position: absolute;
            width: 512px;
            height: 183px;
            left: 464px;
            top: 297px;

            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 61px;

            color: #000000;


        }

        #marker {
            /* Rectangle 8 */

            text-decoration: wavy;
            color: #3164F7;
            background-color: lightblue;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header>
        <span id="logo">IGOTCHU</span>
    </header>
    <p id="text">매일매일이 특별한 날,<br> 우리 가족의 <br>소중한 시간을 <b id="marker">공유</b> 해요.</p>
    <div>
        <a href="login.php" id="logIn">로그인</a>
    </div>
    <form method="post" action="signup.php">
        <input type="submit" value="회원가입" id="signUp">
    </form>
    <form method="post" action="timeline.php">
        <input type="submit" value="시작하기" id="start">
    </form>
</body>

</html>