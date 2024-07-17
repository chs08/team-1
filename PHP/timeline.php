<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/timeline_style.css">
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
            z-index: 2;
        }

        .main {
            position: relative;
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            overflow-y: scroll;
        }

        #image_container_R,
        #image_container_L {
            position: absolute;
            top: 0;
            width: 48vw;
            height: 100vh;
            overflow-y: visible;
            z-index: 1;

        }

        #image_container_R {
            right: 0;
        }

        #image_container_L {
            left: 0;
        }

        p {
            position: relative;
            text-align: center;
            margin-top: 50px;
        }

        p img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .date-label {
            margin-top: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 5px;
            display: inline-block;
            z-index: 600;
            white-space: nowrap;
        }

        .cir1,
        .cir2,
        .cir3,
        .cirB {
            margin-top: 50px;
            border: 10px solid #00f;
            z-index: 500;
            display: inline-block;
            text-align: center;
        }

        .cir1 {
            margin-left: 35%;
            height: 150px;
            width: 150px;
            border-radius: 100%;
        }

        .cir2 {
            margin-left: 10%;
            height: 200px;
            width: 200px;
            border-radius: 50%;
        }

        .arrow {
            height: 100vh;
            width: 10px;
            left: calc(50% - 25px);
            z-index: 1;
            background-color: #3164F7;
            position: fixed;
        }

        #logo {
            font: bold;
            font-size: 38px;
            margin-left: 50px;
        }

        .date-input {
            margin-left: 20px;
            padding: 5px;
            z-index: 600;
        }

        .form-container {
            display: flex;
            align-items: center;
        }

        .form-container input[type="file"] {
            margin-right: 10px;
        }

        article {
            margin-top: 50px;
            width: 48vw;
            height: 200px;
        }
    </style>
    <title>가위서비스</title>
</head>

<body>
    
    <header>
        <span id="logo">IGOTCHU</span>
        <div class="form-container">
            <input type="file" name="image" id="image" accept="image/*">
            <input type="date" id="image-date" class="date-input">
        </div>
    </header>

    <div class="main">
        <div id="image_container_L"></div>
        <div class="arrow"></div>
        <div id="image_container_R"></div>
    </div>
    <script>
        const imageContainerL = document.querySelector("#image_container_L");
        const imageContainerR = document.querySelector("#image_container_R");
        const image = document.querySelector("#image");
        const imageDate = document.querySelector("#image-date");
        let cnt = 0;
        const images = [];

        image.addEventListener("change", (e) => {
            const file = e.target.files[0];
            if (!file) return;
            const dateValue = imageDate.value;
            if (!dateValue) {
                alert("날짜를 입력하세요.");
                return;
            }
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(event) {
                const p = document.createElement("p");
                p.dataset.date = dateValue; // 사용자 입력 날짜 저장
                const dateElement = document.createElement("div");
                dateElement.textContent = dateValue;
                dateElement.classList.add("date-label");

                const dateNumber = new Date(dateValue).getDate();
                if (dateNumber % 2 === 1) { // 홀수일 경우
                    p.classList.add("cir1");
                } else { // 짝수일 경우
                    p.classList.add("cir2");
                }

                const img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                p.appendChild(img);
                p.appendChild(dateElement);

                images.push(p);
                sortAndDisplayImages();
            };
        });

        function sortAndDisplayImages() {
            images.sort((a, b) => new Date(a.dataset.date) - new Date(b.dataset.date));
            imageContainerL.innerHTML = '';
            imageContainerR.innerHTML = '';
            images.forEach((p, index) => {
                if (index % 2 === 0) {
                    imageContainerR.appendChild(p);
                    imageContainerL.appendChild(document.createElement("article"));
                } else {
                    imageContainerL.appendChild(p);
                    imageContainerR.appendChild(document.createElement("article"));
                }
            });
        }
    </script>
</body>

</html>