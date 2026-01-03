<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recetario Astrocooking - Sabores Cósmicos">
    <title>Astrocooking - Preventa | Sabores Cósmicos</title>
    
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/webp" href="assets/favicon.webp">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
        body { padding-top: 80px; }

        
        .product-container {
            display: grid;
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 20px;
            gap: 3rem; 
            
            
            grid-template-columns: 1fr 1fr;
            grid-template-areas: 
                "imagen  info"
                "faq     specs";
            align-items: start;
        }

        /* Asignamos nombres a las cajas */
        .area-imagen { grid-area: imagen; }
        .area-info   { grid-area: info; }
        .area-specs  { grid-area: specs; }
        .area-faq    { grid-area: faq; }

        /* Imagen */
        .book-cover-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.1);
            max-width: 400px; 
            margin: 0 auto;
        }
        
        .book-cover {
            width: 100%;
            display: block;
            transition: transform 0.3s ease;
        }
        .book-cover:hover { transform: scale(1.02); }

        /* Info del Libro */
        .book-info h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 3.5rem;
            color: #d4af37;
            margin-bottom: 0.5rem;
        }
        .author { color: #aaa; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 2rem; }
        .price-tag { font-size: 2rem; font-weight: 700; color: #fff; margin-bottom: 2rem; display: block; }
        .description { font-size: 1.1rem; line-height: 1.8; color: #ddd; margin-bottom: 2rem; }
        
        .btn-large {
            width: 100%;
            padding: 1.2rem;
            font-size: 1.2rem;
            text-align: center;
            margin-top: 1rem;
            display: block;
        }

        
        .specs-table {
            background: rgba(255,255,255,0.03);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .spec-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            font-size: 0.95rem;
        }
        .spec-row:last-child { border-bottom: none; }
        .spec-label { color: #888; }
        .spec-value { color: #fff; font-weight: 600; }

        
        .faq-container h3 { margin-bottom: 1rem; color: #d4af37; }
        
        details {
            background: rgba(0,0,0,0.2);
            margin-bottom: 10px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.05);
            overflow: hidden;
        }
        
        summary {
            padding: 15px;
            cursor: pointer;
            font-weight: 500;
            outline: none;
            list-style: none;
            position: relative;
        }
        
        summary::-webkit-details-marker { display: none; }
        
        summary::after {
            content: '+';
            position: absolute;
            right: 20px;
            font-weight: bold;
            color: #d4af37;
        }
        
        details[open] summary::after { content: '-'; }
        
        .faq-content {
            padding: 0 15px 15px 15px;
            color: #ccc;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        
        @media (max-width: 768px) {
            .product-container {
                grid-template-columns: 1fr;
                gap: 0.5rem;
                
                grid-template-areas: 
                    "imagen"
                    "info"
                    "faq"
                    "specs";
            }
            .book-info h1 { font-size: 2.5rem; }
        }
    </style>

</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.html">
                    <img src="assets/logoHD.png" alt="Logo Sabores Cósmicos" class="logo-img">
                </a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="index.html#home" class="nav-link">Inicio</a>
                <a href="index.html#about" class="nav-link">Sobre Mí</a>
                <a href="index.html#services" class="nav-link">Servicios</a>
                <a href="index.html#products" class="nav-link active">Tienda</a>
                <a href="index.html#contact" class="nav-link">Contacto</a>
            </div>
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

   <main class="product-container">
        
        <div class="area-imagen">
            <div class="book-cover-container">
                <img src="assets/PLACEHOLDER45.jpg" alt="Portada Astrocooking" class="book-cover">
            </div>
        </div>

        <div class="area-info book-info">
            <?php
                $titulo = "Recetario Astrocooking";
                $autor = "María Belén Bauló";
                $precio = "28.000 ARS"; 
                $descripcion = "AstroCooking es un recetario pensado para quienes quieren comer saludable 
                sin pasar horas en la cocina. Vas a encontrar todo lo necesario, ya que te acompaña desde la compra del super hasta
                la preparación de tu comida.<br><br>

En la primera parte, vas a encontrar herramientas concretas para optimizar tu cocina. Cómo conservar alimentos, cómo utilizar la heladera 
y el freezer, aparte de ganar tiempo con comida casera y mejorar la absorción de nutrientes fundamentales como el hierro y la vitamina B.<br><br>

La segunda parte reúne 100 recetas trofológicas dulces y saladas, añadido a una selección de mis recetas preferidas. Platos pensados para 
el día a día, con combinaciones que facilitan la digestión, aumentan tu energía y simplifican tu alimentación sin renunciar a nada.<br><br>

AstroCooking es ideal si buscás practicidad y una forma más equilibrada y  de alimentarte. Una herramienta para volver a disfrutar la cocina, 
comer con conciencia y sostener hábitos reales, posibles y duraderos.";
            ?>

            <h1><?php echo $titulo; ?></h1>
            <p class="author"><?php echo $autor; ?></p>
            <span class="price-tag"><?php echo $precio; ?></span>
            
            <p class="description">
                <?php echo $descripcion; ?>
            </p>

            <a href="https://bit.ly/4j3k0Pp" class="btn btn-large">PRECOMPRAR AHORA</a>
            <p style="text-align:center; font-size:0.8rem; margin-top:10px; color:#888;">
                
            </p>
        </div>

        <div class="area-faq faq-container">
            <h3>Preguntas Frecuentes</h3>
            
            <details>
                <summary>¿En qué formato se entrega?</summary>
                <div class="faq-content">
                    El recetario se entrega en uno de dos formatos: En PDF, hecho para usarse cómodamente en cualquier dispositivo.
                    En formato físico, para toda la argentina. Tapa full color, con un interior de papel obra de 75gr.
                </div>
            </details>

            <details>
                <summary>¿Las recetas son para celíacos, veganos y vegetarianos?</summary>
                <div class="faq-content">
                    Sí, las recetas están adaptadas con opciones sin harina ni huevo, queso, carne, etc.
                </div>
            </details>
             
             <details>
                <summary>¿Cuándo recibo el libro?</summary>
                <div class="faq-content">
                    Al ser una preventa, vas a recibir el libro en tu correo electrónico el día del lanzamiento oficial.
                </div>
            </details>
        </div>

        <div class="area-specs specs-table">
            <div class="spec-row">
                <span class="spec-label">Formato</span>
                <span class="spec-value">Digital (PDF) o Físico</span>
            </div>
            <div class="spec-row">
                <span class="spec-label">Idioma</span>
                <span class="spec-value">Español</span>
            </div>
            <div class="spec-row">
                <span class="spec-label">Páginas</span>
                <span class="spec-value">120 aprox.</span>
            </div>
            <div class="spec-row">
                <span class="spec-label">Lanzamiento</span>
                <span class="spec-value">Feb 2026</span>
            </div>
        </div>

    </main>

    <script src="script.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recetario Astrocooking - Sabores Cósmicos">
    <title>Astrocooking PREVENTA</title>
    
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/webp" href="assets/favicon.webp">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { padding-top: 80px; }

        .product-container {
            display: grid;
            grid-template-columns: 1fr 1fr; 
            gap: 4rem;
            padding: 4rem 20px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: start;
        }

     
        .book-cover-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.1);
            max-width: 450px;
            margin: 0 auto;
        }
        
        .book-cover {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        
        .book-cover:hover { transform: scale(1.02); }

        
        .book-info h1 {
            font-family: 'Raleway';
            font-size: 3rem;
            color: #9faf8cff; 
            margin-bottom: 0.5rem;
        }

        .author {
            font-size: 1.1rem;
            color: #aaa;
            margin-bottom: 2rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .price-tag {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 2rem;
            display: block;
        }

        .description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #ddd;
            margin-bottom: 3rem;
        }

        
        .specs-table {
            width: 100%;
            margin-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .spec-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            font-size: 0.95rem;
        }

        .spec-label { color: #888; font-weight: 500; }
        .spec-value { color: #fff; font-weight: 600; }

    .btn-large {
            display: block;         
            width: 100%;
            padding: 1.2rem;
            font-size: 1.2rem;
            text-align: center;
            margin-top: 2rem;
            
         
            background-color: #d4af37; 
            color: #1a1a1a;           
            border: none;
            border-radius: 50px;       
            text-decoration: none;   
            font-weight: 600;          
            cursor: pointer;
            transition: all 0.3s ease; 
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3); 
        }

        .btn-large:hover {
            background-color: #fff;    
            color: #d4af37;           
            transform: translateY(-3px); 
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5);
        }

        
        @media (max-width: 768px) {
            .product-container { grid-template-columns: 1fr; gap: 2rem; }
            .book-info h1 { font-size: 2.5rem; }
        }

.preview-section {
            max-width: 1200px;
            margin: 1rem auto 6rem auto;
            padding: 0 20px;
            text-align: center;
        }

        .preview-section h2 {
            font-family: 'Times New Roman';
            font-size: 2rem;
            color: #9faf8c;
            margin-bottom: 1rem;
        }

        .carousel-container {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 0px;
            overflow: hidden; 
           
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out; 
            width: 100%;
        }

        .carousel-slide {
            min-width: 100%; 
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; 
        }

        .carousel-slide img,
        .carousel-slide video {
            width: 100%;
            height: 400px;     
            object-fit: cover;
            border-radius: 5px;
            display: block;    
        }


        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 10;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s;

            background: linear-gradient(90deg, #9faf8cff 0%, rgba(159, 175, 140, 0) 100%);
        }

        .slider-btn:hover { opacity: 0.8; }
        .prev-btn { left: 10px; transform: translateY(-50%) rotate(180deg); }
        .next-btn { right: 10px; }
    </style>
</head>
<body>

    <section class="preview-section">
        <h2>Un vistazo por dentro</h2>
        
        <div class="carousel-container">
            <button class="slider-btn prev-btn" onclick="moverCarrusel(-1)">❯</button>
            
            <div class="carousel-track" id="track">
                
                <div class="carousel-slide">
                    <img src="assets/1.1.png" alt="Página interior 1">
                </div>
                
                <div class="carousel-slide">
                    <img src="assets/1.2.png" alt="Página interior 2">
                </div>
                
                <div class="carousel-slide">
                    <img src="assets/1.3.png" alt="Página interior 3">
                </div>
                
               <div class="carousel-slide">
                        <video autoplay loop muted playsinline style="width:100%; height:400px; object-fit:cover; border-radius:5px; display:block;">
                            <source src="assets/1.4.mp4" type="video/mp4">
                            Tu navegador no soporta videos.
                        </video>
                    </div>

                <div class="carousel-slide">
                    <img src="assets/1.5.png" alt="Página interior 5">
                </div>

            </div>

            <button class="slider-btn next-btn" onclick="moverCarrusel(1)">❯</button>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assets/logoHD.png" height="50" alt="Logotipo Sabores Cósmicos" title="Sabores Cósmicos">
                    <p>La conexión de la alimentación con tu energía vital</p>
                </div>
                <div class="footer-links">
                    <a href="#home">Inicio</a>
                    <a href="#about">Sobre Mí</a>
                    <a href="#products">Productos</a>
                    <a href="#services">Servicios</a>
                    <a href="#contact">Contacto</a>
                </div>
                <div class="social-links">
    <a href="https://www.instagram.com/saborescosmicos.mbb/" target="_blank">
        <img src="assets/ig.svg" height="15" alt="Instagram Icon" title="@saborescosmicos.mbb">
        <span>Instagram</span>
    </a>
    <a href="https://www.youtube.com/channel/UCPgUv7SQaU97grO2RtAFSaw" target="_blank">
        <img src="assets/yt.svg" height="15" alt="YouTube Icon" title="@saborescosmicos">
        <span>YouTube</span>
    </a>
    <a href="https://www.tiktok.com/@saborescosmicos" target="_blank">
        <img src="assets/tt.svg" height="15" alt="TikTok Icon" title="@saborescosmicos">
        <span>TikTok</span>
    </a>
    <a href="https://www.facebook.com/saborescosmicos.mbb" target="_blank">
        <img src="assets/fb.svg" height="15" alt="Facebook Icon" title="/saborescosmicos.mbb">
        <span>Facebook</span>
    </a>
    <a href="https://api.whatsapp.com/send/?phone=3516868397&text&type=phone_number&app_absent=0" target="_blank">
        <img src="assets/wsp.svg" height="15" alt="WhatsApp Icon" title="+54 9 351 686-8397">
        <span>WhatsApp</span>
    </a>
</div>
            </div>
            <div class="footer-bottom">
                <p> © 2026 Sabores Cósmicos - María Belén Bauló. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>

    <div id="copy-warning">
    <p>El contenido de esta página está protegido. No se permite su copia.</p>
</div>
</body>
</html>

<script>
        let indiceActual = 0;

        function moverCarrusel(direccion) {
            const track = document.getElementById('track');
            const slides = document.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;

            // Actualizamos el índice
            indiceActual = indiceActual + direccion;

            // Lógica de bucle infinito (si llegas al final, vuelve al inicio)
            if (indiceActual < 0) {
                indiceActual = totalSlides - 1;
            } else if (indiceActual >= totalSlides) {
                indiceActual = 0;
            }

            // Movemos la cinta usando porcentaje
            // Si índice es 0 -> translateX(0%)
            // Si índice es 1 -> translateX(-100%)
            // Si índice es 2 -> translateX(-200%)
            track.style.transform = `translateX(-${indiceActual * 100}%)`;
        }
    </script>

    <script src="script.js"></script>
</body>
</html>