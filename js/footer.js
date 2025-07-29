const footer = document.getElementById("copyright");
let date = new Date();
let anioActual = date.getFullYear();

footer.innerHTML = `© ${anioActual} Alan Pisani. Todos los derechos reservados`;