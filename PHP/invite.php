<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
        }
        body {
            position: relative;
            width: 100vw;
            height: 100vh;
            background: radial-gradient(103.75% 148.96% at -3.75% 115.44%, #3164F7 0%, #FFFFFF 36.01%, #FFFFFF 62.25%, #B1F4CF 91.1%);
        }

        .text {
            position: absolute;
            width: 715px;
            height: 121px;
            left: 320px;
            top: 260px;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 28px;
            line-height: 44px;

            color: #000000;
        }
        #container{
            justify-content: center;
            display: flex;
            align-items: center;
        }
        header {
            height: 10vh;
            width: 100vw;
            background-color: white;
            border-bottom: 1px solid #9A9A9A;
            display: flex;
            align-items: center;
        }

        #logo {
            margin-left: 50px;
            font: bold;
            font-size: 38px;
        }

        input[type=text] {
            box-sizing: border-box;
            position: absolute;
            font-size: 18px;
            width: 670px;
            height: 58px;
            left: 320px;
            top: 350px;
            border: 1px solid #000000;
            border-radius: 10px;
        }

        .btn_c {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            gap: 10px;
            font-size: 16px;
            position: absolute;
            width: 170px;
            height: 70px;
            left: 430px;
            top: 430px;
            border: none;
            background: #3164F7;
            border-radius: 10px;

        }

        .btn_n {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            gap: 10px;
            font-size: 16px;
            position: absolute;
            width: 170px;
            height: 70px;
            left: 640px;
            top: 430px;
            background: #BDBDBD;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header><span id="logo">IGOTCHU</span></header>
    <div id="container">
        <span class="text">
            추억들을 나누고 싶은<br>
            가족들을 초대해 보아요👋
        </span>
        <input type="text" placeholder="초대코드를 입력해주세요.">
        <button class="btn_c">계속</button><button class="btn_n"> 다음에</button>
    </div>
</body>

</html>