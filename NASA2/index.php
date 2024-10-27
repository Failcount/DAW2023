<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA PIC OF THE DAY</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Navegación principal -->
    <nav class="hero">
        <a href="#about">Sobre el espacio</a>
        <a href="#planets">Planetas</a>
        <a href="#gallery">Galería</a>
        <a href="#contact">Contacto</a>
    </nav>

        <section id="hero">
            <canvas id="canvas"></canvas>
            <div class="content">
                <h1>Exploración Espacial</h1>
                <p>Viaja a las estrellas y descubre los secretos del universo</p>
                <button onclick="document.getElementById('loginModal').style.display='block'" class="login-btn">Iniciar sesión</button>
            </div>


            <div class="content">
                <h1>>Exploración Espacial <span class="text-highlight">Viaja a las estrellas y descubre los secretos del universo</span> con la NASA</h1>
                <div class="buttons">
                    <a href="https://github.com/zuramai/starback.js" class="btn btn-light">Documentation</a>
                    <button onclick="document.getElementById('loginModal').style.display='block'" class="login-btn">Iniciar sesión</button>
                </div>

                <div class="examples-section">
                    <p>More examples:</p>

                    <div class="examples">
                        <div class="example">
                            <a href="examples/snowfall">
                                <img src="examples/snowfall/demo.gif" alt="Starfall" />
                            </a>
                        </div>
                        <div class="example">
                            <a href="examples/starfall">
                                <img
                                    src="https://user-images.githubusercontent.com/45036724/130007266-83c720b8-ce3f-47e8-a854-ac0b640ce36f.gif"
                                    alt="Starfall" />
                            </a>
                        </div>
                        <div class="example">
                            <a href="examples/sakura">
                                <img
                                    src="https://user-images.githubusercontent.com/45036724/144608949-c997c9f5-f880-4683-8207-625c644cbee6.gif"
                                    alt="Sakura" />
                            </a>
                        </div>
                    </div>
                    <p class="crafted">Crafted by <a target="_blank" href="https://github.com/zuramai">Saugi</a></p>
                </div>
            </div>
        </section>

    <!-- Sección de cabecera con el tema del espacio -->
    <header class="hero">

    </header>



    <!-- Sección de contenido -->
    <section id="about" class="section">

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