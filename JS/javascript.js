const image = document.querySelector("#image");
let cnt = 0;
image.addEventListener("change", (e) => {
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    const p = document.createElement("p");
    if (cnt % 2 == 0){
        p.classList.add("cir1");
    }
    else {
        p.classList.add("cir2");
    }
    reader.onload = function(event){
        const img = document.createElement("img");
        img.setAttribute("src", event.target.result);
        img.classList.add("img");
        p.appendChild(img);
        const article = document.createElement("article");
        if(cnt % 2 == 0){
            document.querySelector("#image_container_R").appendChild(p);
            document.querySelector("#image_container_L").appendChild(article);
        }
        else{
            document.querySelector("#image_container_L").appendChild(p);
            document.querySelector("#image_container_R").appendChild(article);
        }
    }
    cnt += 1;
});
