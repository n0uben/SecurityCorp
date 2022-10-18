function XSSFaille() {
    const formButton = document.querySelector("#rechercheXSSFailleButton");
    
    formButton.addEventListener("click", (event) => {
        event.preventDefault;
        console.log("coucou cest la faille");
    })
}

function XSSfailleReparee() {
    const formButton = document.querySelector("#rechercheXSSFailleRepareeButton");
    
    formButton.addEventListener("click", (event) => {
        event.preventDefault;
        console.log("coucou cest la faille réparée");
    })
}

function initXSS() {
    XSSFaille();
    XSSfailleReparee();
}

initXSS();