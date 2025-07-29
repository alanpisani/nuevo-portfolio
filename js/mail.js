const form = document.getElementById("form-contacto");
const respuesta = document.getElementById("respuesta");
const botonForm = document.getElementById("enviar-btn");

form.addEventListener('submit', (e) => {
    e.preventDefault();
    botonForm.innerHTML = "Enviando...";
    botonForm.disabled = true;
    const datos = new FormData(form);

    fetch('mail.php', {
    method: 'POST',
    body: datos
    })
    .then(res => res.text())
    .then(data => {
        botonForm.innerHTML = "Enviar";
        botonForm.disabled = false;
        respuesta.textContent = data;
        form.reset();
    })
    .catch(err => {
        respuesta.textContent = "Hubo un error al enviar.";
    });
});