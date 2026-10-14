<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- encabezado -->
    <header>
        <h1>Mi portafolio</h1>
        <p>Bienvenido a mi sitio web personal</p>
    </header>

    <!-- aqui comienza la navegacion -->
    <nav>
        <a href="">Inicio</a>
        <a href="">Sobre mi</a>
        <a href="">Habilidades</a>
        <a href="">Proyectos</a>
        <a href="">Contacto</a>
        <a href="admin.php">Admin</a>
        <a href=""></a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <section class="section-home">
            <div class="section-contenido">
                <h2>Hola, Soy Natalia Zárate :) </h2>
                <p>Soy estudiante de ITIID y estoy aprendiendo a programar</p>
                <a href="" class="boton">Ver mis proyectos</a>
            </div>
        </section>

        <!-- Seccion sobre mi -->
         <section class="">
            <h2>Sobre mi</h2>
            <div class="sobre-mi-contenido"> 
                <img src=""alt ="">
                <div>
                    <p>Algo sobre mi imagen</p>
                    <p>En esta practica estoy aprendiendo HTML & CSS</p>
                </div>
            </div>
        </section>

        <!-- Seccion Habilidades -->
        <section>
            <h2>Mis Habilidades</h2>
            <ul class="lista-habilidades">
                <li>JAVA</li>
                <li>Scratch</li>
                <li>MySQL</li>
                <li>PSint</li>
                <li>PostgreSQL</li>
            </ul>
        </section>

         <!-- Seccion proyectos -->
          <section>
            <h2>Mis proyectos</h2>
            <div class="contenedor-proyectos">
                <article class="proyecto">
                    <h3>Sistema de algo</h3>
                    <p>Descripcion del sistema</p>
                    <a href="">Ver proyecto</a> 
                </article>
                <article class="proyecto">
                    <h3>Sistema de algo</h3>
                    <p>Descripcion del sistema</p>
                    <a href="">Ver proyecto</a> 
                </article>
            </div>
          </section>

          <!-- Seccion contacto -->
          <section>
            <h2> Contact name</h2>
            <form id="formulario" action="guardar_mensaje.php" method="post">
                <div class="campo">
                    <label for="">Nombre</label>
                    <input 
                    type="text"
                    id="nombre"
                    name="txtnombre"
                    placeholder="Escribe tu nombre"
                    required
                    >
                </div>
                <div class="campo">
                    <label for="">Correo</label>
                    <input 
                    type="text"
                    id="email"
                    name="txtcorreo"
                    placeholder="ejemplo@correo"
                    required
                    >
                </div>
                <div class="campo">
                    <label for="">Mensaje</label>
                    <textarea
                    type="text"
                    id="mensaje"
                    name="txtmensaje" 
                    rows="5"
                    placeholder="Escribe tu mensaje"
                    >
                </textarea>
                </div>

                <button type="submit">
                    Enviar mensaje
                </button>

            </form>
          </section> 
    </main> 
    <footer>
        <p> 2026 Mi portafolio web</p>
        <p> Practica de programacion Web todos los derechos reservados</p>
    </footer> 
</body>
</html>