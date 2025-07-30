const buenaOnda = document.getElementById("buena-onda-txt");

const presentacionCard = document.getElementById("presentacion-card");
const presentacionTexto = document.getElementById("presentacion-texto");
const tituloPrincipal = document.querySelector(".bienvenido");

setInterval(() => {
    presentacionCard.classList.add("veni-a-mi");
    tituloPrincipal.classList.add("chau");
}, 750);

setInterval(() => {
    presentacionTexto.classList.add("veni-a-mi");
}, 1000);


buenaOnda.addEventListener('mouseenter', () => {
  for (let i = 0; i < 10; i++) {
    const emoji = document.createElement('span');
    emoji.className = 'globo-emoji';
    emoji.innerHTML = '🎈';

    emoji.style.left = `${Math.random() * 60}px`;

    const desvioX = (Math.random() - 0.5) * 500 + 'px';
    emoji.style.setProperty('--desvio-x', desvioX);

    const escala = 0.8 + Math.random() * 0.6;
    emoji.style.setProperty('--escala', escala);

    buenaOnda.appendChild(emoji);

    setTimeout(() => emoji.remove(), 5000);
  }
});
