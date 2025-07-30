const buenaOnda = document.getElementById("buena-onda-txt");
const alguito = document.querySelector(".alguito");
const presentacionCard = document.getElementById("presentacion-card");
const presentacionTexto = document.getElementById("presentacion-texto");
const tituloPrincipal = document.querySelector(".bienvenido");

buenaOnda.addEventListener("mouseenter", () => alguito.classList.add("aparecer-alguito"));
buenaOnda.addEventListener("mouseleave", () => alguito.classList.remove("aparecer-alguito"));



setInterval(() => {
    presentacionCard.classList.add("veni-a-mi");
    tituloPrincipal.classList.add("chau");
}, 750);

setInterval(() => {
    presentacionTexto.classList.add("veni-a-mi");
}, 1000);
