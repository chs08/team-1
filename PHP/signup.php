<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            width: 100%;
            height: 100%;
        }

        #container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 90vh;
            background: radial-gradient(114.86% 167.01% at -14.86% 114.36%, #AEC3FF 0%, #FFFFFF 40.5%, #FFFFFF 60%, #D9FFEA 100%);
        }

        form {
            margin: auto;
            gap: 5%;
        }

        header {
            height: 10vh;
            width: 100vw;
            background-color: white;
            border-bottom: 1px solid #9A9A9A;
            justify-content: flex-start;
            display: flex;
            align-items: center;
        }

        .input {
            width: 30vw;
            height: 5vh;
        }

        #button_sort {
            display: flex;
            padding-left: 20%;
        }

        h6 {
            color: gray;
        }

        #login_main {
            width: fit-content;
            height: 40vh;
            text-align: start;
        }

        #link_main {
            width: fit-content;
            height: 40vh;
            text-align: start;
        }

        button {
            background-color: #3164F7;
            width: 10vw;
            height: 5vh;
            color: white;
            /* 버튼 텍스트 색상 */
            border: none;
            /* 버튼 테두리 제거 */
            padding: 10px 20px;
            /* 버튼 패딩 */
            border-radius: 5px;
            /* 버튼 모서리 둥글게 */
            cursor: pointer;
            /* 마우스를 올렸을 때 포인터 커서 */
        }

        .login_content {
            display: flex;
            width: fit-content;
            height: fit-content;
            margin-top: 4%;
        }
        #logo {
            margin-left: 50px;
            font: bold;
            font-size: 38px;
        }
        .link_content {
            display: flex;
            width: fit-content;
            height: fit-content;
            margin-top: 4%;
        }

        #button_w {
            width: 100%;
            display: flex;
        }

        button:hover {
            background-color: #2748c4;
            /* 버튼에 마우스를 올렸을 때 색상 변화 */
        }
    </style>
</head>

<body>
    <header>
        <span id="logo">IGOTCHU</span>
    </header>
    <div id="container">

        <div style="width: fit-content;
    height: 60vh;
    text-align: start;">
            <h1>회원가입👨‍👩‍👧‍👧</h1>
            <form>
                <div class="login_content">
                    <h6>이름</h6>
                </div>
                <div class="login_content">
                    <input type="text" placeholder="이름을 입력해주세요" class="input">
                </div>
                <div class="login_content">
                    <h6>이메일</h6>
                </div>
                <div class="login_content">
                    <input type="email" placeholder="이메일를 입력해주세요" class="input">
                </div>
                <div class="login_content">
                    <h6>비밀번호</h6>
                </div>
                <div class="login_content">
                    <input type="password" placeholder="비밀번호를 입력해주세요" class="input">
                </div>
            </form>
            <div class="button_w" style="padding-left:40%;padding-top:10%;">
                <button type="button">확인</button>
            </div>

        </div>
    </div>

</body>

</html>