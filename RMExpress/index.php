<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RM Express</title>
    <link rel="stylesheet" href="archivo.css.php">
     <!-- Enlaces a Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="ruta/a/tu/estilos.css"> <!-- Agrega una ruta válida a tu archivo de estilos -->
    </head>
<body>
     <!-- Header with navigation -->
    <header>
        <div class="container">
            <h1>RM Express</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
        </header>
        <section id="hero">
            <h1>Bienvenidos a logistoca de e-commerce <br>Ultima Milla</h1>
            <button>RM Express</button>
        </section>
    <!-- Sección Nosotros -->
    <section id="nosotros" class="section">
        <div class="container">

        <div class= ""img-section">
    <!-- Aquí puedes agregar una imagen con una URL -->
    <img src="tu_url_de_imagen.jpg" alt="Descripción de la imagen">
        </div>
          <h2>Nosotros</h2>
            <p>En nuestro negocio de comercio electrónico, con Warehouse en Miami y algunas operaciones extendidas 
                en la E-Commerce Zona Libre de Colón, Panamá, y otras en la Comunidad Andina, hemos brindado a los comerciantes, 
                la industria y los emprendedores, nuevos canales de ventas electrónicas 
                en el canal minorista, para lograr una consolidación de productos misceláneos desde nuestro e-warehouse.</p>
        </div>
    </section>
    <!-- Sección Servicios -->
    <section id="servicios" class="section">
        <div class="container">
        <div class= "img-section">
        <!-- Aquí puedes agregar una imagen con una URL -->
        <img src="tu_url_de_imagen_servicios.jpg" alt="Descripción de la imagen de servicios">
        </div>
        
        <h2>Servicios</h2>
            <!-- Lista de servicios -->
            <ul>
                <li>Almacenamiento y consolidación</li>
                <li>Etiquetado y revisión de productos</li>
                <li>Recepción, descarga, inspección y conteo de mercancías</li>
                <li>Gestión de inventario Warehouse Management System (WMS)</li>
            </ul>
        </div>
    </section>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            display: grid;
            grid-gap: 15px;
        }

        label {
            font-size: 16px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!-- Sección Contacto -->
    <section id="contacto" class="section">
        <div class="container">
            <h2>Contacto</h2>
            <!-- Formulario de contacto -->
            <form action="procesar_formulario.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button type="submit">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    <!-- Carrusel de Bootstrap -->
    <div id="miCarrusel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/carrusel-bootstrap/logistica1.jpg" class="d-block w-100" alt="Logística 1">
            </div>
            <div class="carousel-item">
                <img src="assets/images/carrusel-bootstrap/logistica2.jpg" class="d-block w-100" alt="Logística 2">
            </div>
            <!-- Agrega más elementos de carousel-item según sea necesario -->
        </div>
        <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Main content section -->
    <section class="main-content">
        <div class="container">
            <p>Soluciones logísticas eficientes para tu comercio electrónico.</p>
            <p>Optimizamos procesos desde la recepción hasta la entrega.</p>
        </div>
    </section>

    <!-- Contenedor para el mapa -->
    <div id="mapa" style="height: 400px;"></div>

    <!-- Agregando el script de la API de Google Maps al final del cuerpo del documento HTML -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=TU_CLAVE_DE_API&callback=initMap"></script>

    <!-- Referencia al archivo JavaScript externo -->
    <script src="ruta/a/tu/main.js"></script>

    <!-- Script de JavaScript para inicializar el mapa -->
    <script>
        function initMap() {
            // la ubicación y otros parámetros del mapa aquí
            var mapOptions = {
                center: {lat: -34.6037, lng: -58.3816}, // Coordenadas de Buenos Aires, Argentina (solo un ejemplo)
                zoom: 12,
            };
            var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
        }
    </script>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Síguenos en nuestras redes sociales: <a href="#">Facebook</a> e <a href="#">Instagram</a></p>
        </div>
    </footer>

    <!-- Enlaces a Bootstrap y scripts  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
