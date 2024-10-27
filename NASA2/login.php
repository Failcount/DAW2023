<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA PIC OF THE DAY</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<section id="hero">
<canvas id="canvas"></canvas>
<div class="content">
    <!-- Sección de cabecera con el tema del espacio -->
    <header class="hero">
        <h1>Exploración Espacial</h1>
        <p>Viaja a las estrellas y descubre los secretos del universo</p>
        <button onclick="document.getElementById('loginModal').style.display='block'" class="login-btn">Iniciar sesión</button>
    </header>

    <!-- Navegación principal -->
    <nav class="navbar">
        <a href="#about">Sobre el espacio</a>
        <a href="#planets">Planetas</a>
        <a href="#gallery">Galería</a>
        <a href="#contact">Contacto</a>
    </nav>

    <!-- Sección de contenido -->
    <section id="about" class="section">
        <h2>Acerca del espacio</h2>
        <p>El espacio exterior es un lugar lleno de misterio y maravilla. Desde planetas y estrellas hasta galaxias y nebulosas, cada rincón del cosmos tiene algo asombroso por descubrir.</p>
    </section>

    <!-- Modal de login -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('loginModal').style.display='none'">&times;</span>
            <h2>Iniciar sesión</h2>
            <form action="#" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="submit-btn">Ingresar</button>
            </form>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer" id="contact">
        <p>&copy; 2024 Exploración Espacial. Todos los derechos reservados.</p>
    </footer>

</div>>
    </section>
    <script src="js/starback.js"></script>

    <script>
        const canvas = document.getElementById('canvas');

        const starback = new Starback(canvas, {
            width: document.body.clientWidth,
            height: document.body.clientHeight,
            type: 'dot',
            quantity: 100,
            direction: 225,
            backgroundColor: ['#0e1118', '#232b3e'],
            randomOpacity: true,
        });

        let mountain = new Image();
        mountain.src = 'images/mountain2.png';

        mountain.onload = () => {
            starback.addToFront((ctx) => {
                ctx.drawImage(
                    mountain,
                    0,
                    0,
                    mountain.width,
                    mountain.height,
                    0,
                    canvas.height - mountain.height,
                    canvas.width,
                    mountain.height
                );
            });
        }
    </script>
</body>

</html>