<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/timeline_style.css">
    <style>
        * {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

        #image_container_R {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 48dvw;
            height: 100vh;
            z-index: 1;
        }

        #image_container_L {
            position: absolute;
            top: 0px;
            left: 0vw;
            width: 48vw;
            height: 100vh;
            z-index: 1;
        }

        p {
            height: 150px;
            background-color: #00f;
            z-index: 500;
        }

        article {
            height: 150px;
            margin-top: 50px;
        }

        p>.img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            background-size: contain;
            z-index: 500;
        }

        .cir1 {
            margin-top: 50px;
            margin-left: 50%;
            height: 150px;
            width: 150px;
            border-radius: 100%;
            overflow: scroll;
            border: 10px solid #00f;
            z-index: 500;
        }

        .cir2 {
            margin-top: 50px;
            margin-left: 20%;
            height: 150px;
            width: 150px;
            border-radius: 100%;
            overflow: hidden;
            border: 10px solid #00f;
            z-index: 500;
        }

        .arrow_ground {
            height: 100vh;
            width: 10px;
            margin-left: 49.7vw;
            z-index: 1;
            background-color: #3164F7;
            background-attachment: fixed;
        }
        #logo{
            font: bold;
            font-size: 38px;
        }
    </style>
    <title>가위서비스</title>
</head>

<body>
    <header>
        <span id="logo">IGOTCHU</span>
        <input type="file" name="image" id="image" accept="image/*">
    </header>

    <div class="main">
        <div id="image_container_L"></div>
        <div class="arrow_ground"></div>
        <div id="image_container_R"></div>
    </div>
    <script>
        const image = document.querySelector("#image");
        let cnt = 0;
        image.addEventListener("change", (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.readAsDataURL(file);
            const p = document.createElement("p");
            if (cnt % 2 == 0) {
                p.classList.add("cir1");
            } else {
                p.classList.add("cir2");
            }
            reader.onload = function(event) {
                const img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                img.classList.add("img");
                p.appendChild(img);
                const article = document.createElement("article");
                if (cnt % 2 == 0) {
                    document.querySelector("#image_container_R").appendChild(p);
                    document.querySelector("#image_container_L").appendChild(article);
                } else {
                    document.querySelector("#image_container_L").appendChild(p);
                    document.querySelector("#image_container_R").appendChild(article);
                }
            }
            cnt += 1;
        });
    </script>
</body>

</html>