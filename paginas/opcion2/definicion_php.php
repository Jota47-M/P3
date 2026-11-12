<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definición PHP - EduTech</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <header>
        <div class="header-contenedor">
            <a href="../../index.html">
                <img src="../../img/logo_edutech.png" alt="EduTech Logo" class="logo-img">
            </a>
            <nav>
                <ul class="menu-principal">
                    <li class="menu-item"><a href="../../index.html">Inicio</a></li>
                    <li class="menu-item">
                        <a href="#">Algoritmos &#9662;</a>
                        <ul class="submenu">
                            <li><a href="../opcion1/definicion_algoritmo.html">&#128221; Definición de Algoritmo</a></li>
                            <li><a href="../opcion1/algoritmos_secuenciales.html">&#10145;&#65039; Algoritmos Secuenciales</a></li>
                            <li><a href="../opcion1/algoritmos_condicionales.html">&#10067; Algoritmos Condicionales</a></li>
                            <li><a href="../opcion1/algoritmos_anidados.html">&#129518; Algoritmos Anidados</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">PHP &#9662;</a>
                        <ul class="submenu">
                            <li><a href="definicion_php.php">&#128221; Definición PHP</a></li>
                            <li><a href="php_secuenciales.php">&#10145;&#65039; Secuenciales PHP</a></li>
                            <li><a href="php_condicionales.php">&#10067; Condicionales PHP</a></li>
                            <li><a href="php_bucles.php">&#128260; Bucles PHP</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">Programación de Software &#9662;</a>
                        <ul class="submenu">
                            <li><a href="../opcion3/intro_programacion.html">&#128640; Introducción a la Programación</a></li>
                            <li><a href="../opcion3/lenguajes_programacion.html">&#9000;&#65039; Lenguajes de Programación</a></li>
                            <li><a href="../opcion3/paradigmas_programacion.html">&#128260; Paradigmas de Programación</a></li>
                            <li><a href="../opcion3/desarrollo_software.html">&#9881;&#65039; Desarrollo de Software</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">Acerca de &#9662;</a>
                        <ul class="submenu">
                            <li><a href="../opcion4/acerca_proyecto.html">&#8505;&#65039; Acerca del Proyecto</a></li>
                            <li><a href="../opcion4/autores.html">&#128101; Autores y Créditos</a></li>
                            <li><a href="../opcion4/recursos.html">&#128218; Recursos Educativos</a></li>
                            <li><a href="../opcion4/contacto.html">&#128236; Contacto</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="contenedor-principal">
            <section class="hero">
                <h1>&#128221; Definición de PHP</h1>
                <p>Qué es PHP, cómo se ejecuta en XAMPP y cómo se usan las variables</p>
            </section>
            
            <section>
                <h2>¿Qué es PHP?</h2>
                <div class="caja-destacada">
                    <p>
                        PHP ("PHP: Hypertext Preprocessor") es un lenguaje de programación pensado sobre todo para
                        crear páginas web dinámicas. El código PHP se ejecuta en el servidor (en tu caso, XAMPP con
                        Apache) y al navegador solo le llega el resultado. Por eso estas páginas tienen extensión
                        <strong>.php</strong> y deben abrirse a través de <strong>http://localhost/</strong>, no con
                        doble clic.
                    </p>
                </div>
                <div class="nota-xampp">
                    <strong>&#9888;&#65039; Importante para que funcione en XAMPP:</strong>
                    copia la carpeta del sitio dentro de <strong>C:\\xampp\\htdocs</strong>, inicia Apache desde el
                    panel de XAMPP y abre las páginas escribiendo en el navegador, por ejemplo,
                    <strong>http://localhost/PaginaJT/paginas/opcion2/definicion_php.php</strong>. Si abres el .php con
                    doble clic verás el código en lugar del resultado.
                </div>
            </section>

            <section>
                <h2>Tu primer programa: este texto lo generó PHP</h2>
                <div class="caja-info">
                    <p>
                        Todo el código PHP se escribe entre <strong>&lt;?php</strong> y <strong>?&gt;</strong>. Cada
                        instrucción termina en punto y coma ( ; ) y para mostrar texto se usa <strong>echo</strong>.
                        El recuadro verde de abajo no está escrito a mano: lo está imprimiendo PHP en este momento.
                    </p>
                </div>
                <div class="php-grid">
                    <div class="codigo-php">
                        <span class="pc-titulo">Código PHP</span>
<pre><span class="tag">&lt;?php</span>
  <span class="kw">echo</span> <span class="str">"¡Hola! Soy PHP y la fecha de hoy es: "</span>;
  <span class="kw">echo</span> <span class="fn">date</span>(<span class="str">"d/m/Y"</span>);
<span class="tag">?&gt;</span></pre>
                    </div>
                    <div class="resultado-php">
                        <span class="res-titulo">Salida real de PHP</span>
                        <?php
                            echo "¡Hola! Soy PHP y la fecha de hoy es: ";
                            echo date("d/m/Y");
                        ?>
                    </div>
                </div>
            </section>

            <section>
                <h2>Variables en PHP</h2>
                <div class="caja-info">
                    <p>
                        Una variable guarda un dato y en PHP siempre empieza con <strong>$</strong>. No se declara el
                        tipo: PHP lo deduce solo. Para unir texto y variables se usa el punto ( . ) o se escribe la
                        variable dentro de comillas dobles.
                    </p>
                </div>
                <div class="php-grid">
                    <div class="codigo-php">
                        <span class="pc-titulo">variables.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$nombre</span> = <span class="str">"Ana"</span>;
  <span class="var">$edad</span>   = <span class="num">15</span>;
  <span class="kw">echo</span> <span class="str">"Hola $nombre, tienes $edad años"</span>;
<span class="tag">?&gt;</span></pre>
                    </div>
                    <div class="resultado-php">
                        <span class="res-titulo">Salida real de PHP</span>
                        <?php
                            $nombre = "Ana";
                            $edad   = 15;
                            echo "Hola $nombre, tienes $edad años";
                        ?>
                    </div>
                </div>
            </section>

            <section>
                <h2>¿Qué veremos en esta sección?</h2>
                <div class="opciones-principales">
                    <div class="opcion-principal">
                        <div class="opcion-icono">&#10145;&#65039;</div>
                        <div class="opcion-texto">
                            <h3>Secuenciales</h3>
                            <p>Programas con formulario que leen datos, calculan y muestran el resultado.</p>
                            <a href="php_secuenciales.php" class="opcion-enlace">Ver ejemplos &#8594;</a>
                        </div>
                    </div>
                    <div class="opcion-principal">
                        <div class="opcion-icono">&#10067;</div>
                        <div class="opcion-texto">
                            <h3>Condicionales</h3>
                            <p>Decisiones con if/else, incluida la ecuación de segundo grado.</p>
                            <a href="php_condicionales.php" class="opcion-enlace">Ver ejemplos &#8594;</a>
                        </div>
                    </div>
                    <div class="opcion-principal">
                        <div class="opcion-icono">&#128260;</div>
                        <div class="opcion-texto">
                            <h3>Bucles</h3>
                            <p>Repetir instrucciones con while y for: tablas, sumas y más.</p>
                            <a href="php_bucles.php" class="opcion-enlace">Ver ejemplos &#8594;</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="navegacion-paginas">
                <a href="../../index.html" class="nav-anterior">&#8592; Volver al Inicio</a>
                <a href="php_secuenciales.php" class="nav-siguiente">Secuenciales PHP &#8594;</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-contenedor">
            <div class="footer-contenido">
                <div class="footer-seccion">
                    <h3>&#128640; EduTech</h3>
                    <p>Sitio web educativo para estudiantes de grado décimo.</p>
                    <div class="footer-redes">
                        <a href="#" class="icono-red">f</a>
                        <a href="#" class="icono-red">t</a>
                        <a href="#" class="icono-red">&#9654;</a>
                    </div>
                </div>
                <div class="footer-seccion">
                    <h3>PHP</h3>
                    <ul>
                        <li><a href="definicion_php.php">Definición PHP</a></li>
                        <li><a href="php_secuenciales.php">Secuenciales PHP</a></li>
                        <li><a href="php_condicionales.php">Condicionales PHP</a></li>
                        <li><a href="php_bucles.php">Bucles PHP</a></li>
                    </ul>
                </div>
                <div class="footer-seccion">
                    <h3>Más Contenido</h3>
                    <ul>
                        <li><a href="../opcion1/definicion_algoritmo.html">Algoritmos</a></li>
                        <li><a href="../opcion3/intro_programacion.html">Programación</a></li>
                        <li><a href="../opcion4/recursos.html">Recursos Educativos</a></li>
                        <li><a href="../opcion4/contacto.html">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-linea">
                <div class="footer-inferior">
                    <p class="copyright">&copy; 2024 EduTech - Proyecto Educativo para Grado Décimo.</p>
                    <div class="footer-enlaces">
                        <a href="../../index.html">Inicio</a>
                        <a href="../opcion4/contacto.html">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>