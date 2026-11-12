<?php
// ===== Procesamiento de los formularios secuenciales =====
$suma = null;
if (isset($_POST['enviar_suma'])) {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $suma = $a + $b;
}

$area = null;
if (isset($_POST['enviar_area'])) {
    $base   = (float)$_POST['base'];
    $altura = (float)$_POST['altura'];
    $area   = $base * $altura;
}

$iva = null; $total = null;
if (isset($_POST['enviar_iva'])) {
    $precio = (float)$_POST['precio'];
    $iva    = $precio * 0.19;
    $total  = $precio + $iva;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secuenciales PHP - EduTech</title>
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
                <h1>&#10145;&#65039; Secuenciales en PHP</h1>
                <p>Programas con formulario que leen datos, calculan y muestran el resultado</p>
            </section>
            
            <section>
                <h2>¿Qué es un programa secuencial?</h2>
                <div class="caja-destacada">
                    <p>
                        En un programa secuencial las instrucciones se ejecutan una tras otra, sin decisiones ni
                        repeticiones: primero se leen los datos (aquí, los del formulario), luego se calcula y al final
                        se muestra el resultado. Escribe valores en los formularios y presiona el botón: PHP procesa los
                        datos en el servidor y te devuelve el resultado real.
                    </p>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 1</span>
                <h2>Sumar dos números</h2>
                <p>El formulario envía dos números a PHP, que los suma y devuelve el resultado.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">suma.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$a</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'a'</span>];
  <span class="var">$b</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'b'</span>];

  <span class="var">$suma</span> = <span class="var">$a</span> + <span class="var">$b</span>;

  <span class="kw">echo</span> <span class="str">"La suma es: $suma"</span>;
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <div class="fila-campos">
                                    <div>
                                        <label>Número a</label>
                                        <input type="number" step="any" name="a" value="<?php echo isset($_POST['a'])? htmlspecialchars($_POST['a']) : '8'; ?>" required>
                                    </div>
                                    <div>
                                        <label>Número b</label>
                                        <input type="number" step="any" name="b" value="<?php echo isset($_POST['b'])? htmlspecialchars($_POST['b']) : '5'; ?>" required>
                                    </div>
                                </div>
                                <button type="submit" name="enviar_suma">Calcular suma</button>
                            </form>
                        </div>
                        <?php if ($suma !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            La suma es: <?php echo $suma; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_sec_suma.svg" alt="Diagrama secuencial de la suma de dos números." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">Diagrama secuencial de la suma de dos números.</p>
                    </div>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 2</span>
                <h2>Área de un rectángulo</h2>
                <p>Con la base y la altura, PHP calcula el área multiplicando.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">area.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$base</span>   = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'base'</span>];
  <span class="var">$altura</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'altura'</span>];

  <span class="var">$area</span> = <span class="var">$base</span> * <span class="var">$altura</span>;

  <span class="kw">echo</span> <span class="str">"El área es: $area"</span>;
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <div class="fila-campos">
                                    <div>
                                        <label>Base</label>
                                        <input type="number" step="any" name="base" value="<?php echo isset($_POST['base'])? htmlspecialchars($_POST['base']) : '10'; ?>" required>
                                    </div>
                                    <div>
                                        <label>Altura</label>
                                        <input type="number" step="any" name="altura" value="<?php echo isset($_POST['altura'])? htmlspecialchars($_POST['altura']) : '4'; ?>" required>
                                    </div>
                                </div>
                                <button type="submit" name="enviar_area">Calcular área</button>
                            </form>
                        </div>
                        <?php if ($area !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            El área es: <?php echo $area; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_sec_area.svg" alt="Diagrama secuencial del área de un rectángulo." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">Diagrama secuencial del área de un rectángulo.</p>
                    </div>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 3</span>
                <h2>Precio con IVA</h2>
                <p>PHP calcula el 19% de IVA del precio y el total a pagar.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">iva.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$precio</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'precio'</span>];

  <span class="var">$iva</span>   = <span class="var">$precio</span> * <span class="num">0.19</span>;
  <span class="var">$total</span> = <span class="var">$precio</span> + <span class="var">$iva</span>;

  <span class="kw">echo</span> <span class="str">"IVA: $iva &lt;br&gt; Total: $total"</span>;
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <label>Precio base del producto</label>
                                <input type="number" step="any" name="precio" value="<?php echo isset($_POST['precio'])? htmlspecialchars($_POST['precio']) : '20000'; ?>" required>
                                <button type="submit" name="enviar_iva">Calcular IVA y total</button>
                            </form>
                        </div>
                        <?php if ($iva !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            IVA (19%): <?php echo $iva; ?><br>
                            Total a pagar: <?php echo $total; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_sec_area.svg" alt="El cálculo del IVA sigue el patrón secuencial: leer, calcular, mostrar." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">El cálculo del IVA sigue el patrón secuencial: leer, calcular, mostrar.</p>
                    </div>
                </div>
            </section>
            <div class="navegacion-paginas">
                <a href="definicion_php.php" class="nav-anterior">&#8592; Definición PHP</a>
                <a href="php_condicionales.php" class="nav-siguiente">Condicionales PHP &#8594;</a>
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