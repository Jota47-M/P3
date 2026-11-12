<?php
// ===== Procesamiento de los formularios de bucles =====
$tabla = null;
if (isset($_POST['enviar_tabla'])) {
    $num = (int)$_POST['num'];
    $tabla = "";
    for ($i = 1; $i <= 10; $i++) {
        $r = $num * $i;
        $tabla .= "$num x $i = $r\n";
    }
}

$sumaN = null;
if (isset($_POST['enviar_sumaN'])) {
    $n = (int)$_POST['nLimite'];
    $acum = 0;
    $i = 1;
    while ($i <= $n) {
        $acum = $acum + $i;
        $i = $i + 1;
    }
    $sumaN = "La suma del 1 al $n es: $acum";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles PHP - EduTech</title>
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
                <h1>&#128260; Bucles en PHP</h1>
                <p>Repetir instrucciones con while y for, ejecutándose de verdad</p>
            </section>
            
            <section>
                <h2>¿Qué es un bucle?</h2>
                <div class="caja-destacada">
                    <p>
                        Un bucle (o ciclo) repite un bloque de código varias veces. En PHP los más usados son
                        <strong>for</strong> (cuando sabemos cuántas veces repetir) y <strong>while</strong> (mientras se
                        cumpla una condición). Casi siempre usamos una variable contador que va aumentando. Prueba los
                        formularios: PHP ejecuta el bucle completo y te devuelve todas las vueltas.
                    </p>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 1</span>
                <h2>Tabla de multiplicar (for)</h2>
                <p>Con un bucle for, PHP repite 10 veces el cálculo aumentando el contador de 1 a 10.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">tabla.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$num</span> = (<span class="kw">int</span>)<span class="var">$_POST</span>[<span class="str">'num'</span>];

  <span class="kw">for</span> (<span class="var">$i</span> = <span class="num">1</span>; <span class="var">$i</span> &lt;= <span class="num">10</span>; <span class="var">$i</span>++) {
    <span class="var">$r</span> = <span class="var">$num</span> * <span class="var">$i</span>;
    <span class="kw">echo</span> <span class="str">"$num x $i = $r &lt;br&gt;"</span>;
  }
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <label>¿Tabla de qué número?</label>
                                <input type="number" name="num" value="<?php echo isset($_POST['num'])? htmlspecialchars($_POST['num']) : '5'; ?>" required>
                                <button type="submit" name="enviar_tabla">Generar tabla</button>
                            </form>
                        </div>
                        <?php if ($tabla !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            <?php echo nl2br(htmlspecialchars($tabla)); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_bucle_tabla.svg" alt="Diagrama de bucle: el flujo regresa a la condición hasta que el contador supera 10." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">Diagrama de bucle: el flujo regresa a la condición hasta que el contador supera 10.</p>
                    </div>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 2</span>
                <h2>Suma del 1 al N (while)</h2>
                <p>PHP acumula en una variable cada número desde 1 hasta N usando un bucle while.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">suma_n.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$n</span> = (<span class="kw">int</span>)<span class="var">$_POST</span>[<span class="str">'nLimite'</span>];
  <span class="var">$suma</span> = <span class="num">0</span>;
  <span class="var">$i</span> = <span class="num">1</span>;

  <span class="kw">while</span> (<span class="var">$i</span> &lt;= <span class="var">$n</span>) {
    <span class="var">$suma</span> = <span class="var">$suma</span> + <span class="var">$i</span>;
    <span class="var">$i</span> = <span class="var">$i</span> + <span class="num">1</span>;
  }

  <span class="kw">echo</span> <span class="str">"La suma es: $suma"</span>;
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <label>Sumar desde 1 hasta...</label>
                                <input type="number" name="nLimite" value="<?php echo isset($_POST['nLimite'])? htmlspecialchars($_POST['nLimite']) : '5'; ?>" required>
                                <button type="submit" name="enviar_sumaN">Calcular suma</button>
                            </form>
                        </div>
                        <?php if ($sumaN !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            <?php echo $sumaN; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_bucle_suma.svg" alt="Diagrama de bucle con acumulador: suma 1+2+3+...+N." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">Diagrama de bucle con acumulador: suma 1+2+3+...+N.</p>
                    </div>
                </div>
            </section>
            <div class="navegacion-paginas">
                <a href="php_condicionales.php" class="nav-anterior">&#8592; Condicionales PHP</a>
                <a href="../../index.html" class="nav-siguiente">Volver al Inicio &#8594;</a>
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