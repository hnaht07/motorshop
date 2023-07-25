let upload = document.getElementById("product-img");
let chosen = document.getElementById("chooseImg");

upload.onchange = () =>{
    let reader = new FileReader();
    reader.readAsDataURL(upload.files[0]);
    reader.onload = () =>{
        chosen.setAttribute("src", reader.result);
    }
}

let fileInput = document.getElementById("product-imgs");
let imageContainer = document.getElementById("images");
let numOfFile = document.getElementById("num-of-files");

function preview() {
    imageContainer.innerHTML = "";
    numOfFile.textContent = `${fileInput.files.length} Đã Được Chọn`;
    for(i of fileInput.files){
        let reader = new FileReader();
        
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src", reader.result);
            img.setAttribute("id", "imgPre");
        }
        reader.readAsDataURL(i);

    }
}