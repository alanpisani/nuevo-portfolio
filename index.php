<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alan Pisani - Portfolio</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/icons/favicon.png" type="image/x-icon">
<body>
    <header>
        <nav>
            <ul>
                <li class="alan">Alan</li>
                <div class="lista-desktop">
                    <li><a href="#proyectos">Proyectos</a></li>
                    <li><a href="#sobre-mi">Sobre mi</a></li>
                    <li><a href="#contacto">Contactame</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <section class="presentacion">
            <div class="presentacion-fondo">
                <div class="fondo-uno"></div>
                <div class="fondo-dos"></div>
            </div>
            <div class="presentacion-contenido">
                <h1 class="bienvenido">MI PORTFOLIO</h1>
                <div class="presentacion-card" id="presentacion-card">
                    <img class="avatar" src="assets/img/cara.jpeg" alt="">
                    <p style='font-size:2rem;'>Alan Pisani</p>
                    <p class="pres-card-descripcion">Desarrollador Backend enfocado en soluciones modernas con ASP.NET Core, C# y tecnologías web</p>
                    <a class="cv-btn" href="download/cv_alan_pisani.pdf" target="_blank" download>Descargar CV</a>
                </div>
                <div class="presentacion-texto" id="presentacion-texto">
                    <h2 class="saludo"><span>🖐</span> Hola, soy Alan</h2>
                    <p class="presentacion-descripcion">Me gusta crear experiencias web claras, funcionales y con <span class="sacar-relleno" id="buena-onda-txt">buena onda</span>.</p>
                    <div class="alguito"></div>
                </div>
            </div>
        </section>
        <section class="proyectos-section">
            <h2 id="proyectos">Proyectos</h2>
            <div class="proyectos-container">
                <div class="proyecto-card">
                    <img src="assets/img/todo.png" alt="">
                    <div class="proyecto-detalles">
                        <h3>Lista de tareas</h3>
                        <div class="langs">
                            <div class="lang asp">asp.net</div>
                            <div class="lang bootstrap">Bootstrap</div>
                        </div>
                        <p class="card-descripcion">Sistema de gestión de tareas. Posee autenticación y relación tareas-usuario. Creada desde cero con asp.net, Javascript y Bootstrap.</p>
                        <div class="proyecto-btns">
                            <a class="basic-btn" href="https://github.com/alanpisani/lista-de-tareas-csharp" target="_blank">GitHub</a>
                            <a class="basic-btn" href='https://tasker.alanpisani.com.ar'" target="_blank">Demo</a>
                        </div>
                    </div>
                </div>

                <div class="proyecto-card">
                    <img src="assets/img/appmovil.jpeg" alt="">
                    <div class="proyecto-detalles">
                        <h3>App móvil</h3>
                        <div class="langs">
                            <div class="lang asp">Flutter</div>
                        </div>
                        <p class="card-descripcion">Pequeña plataforma de minijuegos. Posee autenticación, sistema de logros y un ranking global. Hecho con flutter.</p>
                        <div class="proyecto-btns">
                            <a class="basic-btn" href="https://github.com/alanpisani/seminario-2" target="_blank">GitHub</a>
                            <a class="basic-btn" href="download/seminario.apk" target="_blank" download>Descargar APK</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="proyecto-card">
                    <img src="assets/img/todo.png" alt="">
                    <div class="proyecto-detalles">
                        <h3>Lista de tareas</h3>
                        <div class="langs">
                            <div class="lang asp">asp.net</div>
                            <div class="lang bootstrap">Bootstrap</div>
                        </div>
                        <p class="card-descripcion">Sistema de gestión de tareas. Posee autenticación y relación tareas-usuario. Creada desde cero con asp.net, Javascript y Bootstrap.</p>
                        <div class="proyecto-btns">
                            <a class="basic-btn" href="https://github.com/alanpisani/lista-de-tareas-csharp" target="_blank">GitHub</a>
                            <a class="basic-btn" href='https://tasker.alanpisani.com.ar'" target="_blank">Demo</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="about-me-section">
            <div class="about-me-container">
                <div class="about-me-text">
                    <h2 id="sobre-mi">Sobre mi</h2>
                    <p>Me llamo Alan Pisani, estudiante avanzado del tercer año de la Tecnicatura Superior en Análisis de Sistemas, con un promedio de 9.4.<br>Me especializo en tecnologías modernas con un enfoque práctico y orientado a la resolución de problemas.</p>
                    <p>Me destaco por mi capacidad para aprender rápido, adaptarme a nuevos desafíos y entregar soluciones claras y bien estructuradas. Soy una persona proactiva, comprometida y con ganas de crecer profesionalmente en un equipo donde pueda aportar, potenciar mis conocimientos y demostrar de lo que soy capaz.
                    </p>
                </div>

                <img src="assets/img/cara-2.jpg" alt="">
            </div>
        </section>
        <section class="form-section">
            <div class="form-content">
                <h2 id="contacto">Contactame</h2>
                <form method="POST" id="form-contacto">
                    <label for="nombre">Tu nombre</label>
                    <input type="text" name="nombre" placeholder="Tu nombre" required>
                    
                    <label for="email">Tu email</label>
                    <input type="email" name="email" placeholder="Tu email" required>
                    
                    <label for="nombre">Mensaje</label>
                    <textarea name="mensaje" placeholder="Escribime tu mensaje" required></textarea>
                    <button type="submit" id="enviar-btn">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p class="copyright" id="copyright">copy</p>
        <div class="redes">
            <a href="https://www.linkedin.com/in/alan-pisani/" target="_blank">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>
            <a href="https://github.com/alanpisani" target="_blank">
                <i class="fa fa-github-square" aria-hidden="true"></i>
            </a>
            
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/footer.js"></script>
</body>
</html>