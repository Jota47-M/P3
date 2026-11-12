<?php
// ===== Procesamiento de los formularios condicionales =====
$tipo = null;
if (isset($_POST['enviar_par'])) {
    $n = (int)$_POST['n'];
    $resto = $n % 2;
    if ($resto == 0) { $tipo = "El número $n es PAR"; }
    else { $tipo = "El número $n es IMPAR"; }
}

$estado = null;
if (isset($_POST['enviar_nota'])) {
    $nota = (float)$_POST['nota'];
    if ($nota >= 3.0) { $estado = "Con nota $nota: APRUEBA"; }
    else { $estado = "Con nota $nota: REPRUEBA"; }
}

$ecuacion = null; $ecuacion_clase = "";
if (isset($_POST['enviar_ecuacion'])) {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];
    if ($a == 0) {
        $ecuacion = "El valor de a no puede ser 0 (no seria de segundo grado).";
        $ecuacion_clase = "error";
    } else {
        $d = $b * $b - 4 * $a * $c;
        if ($d > 0) {
            $x1 = (-$b + sqrt($d)) / (2 * $a);
            $x2 = (-$b - sqrt($d)) / (2 * $a);
            $ecuacion = "Discriminante d = $d (mayor que 0)\nDos soluciones reales:\nx1 = $x1\nx2 = $x2";
        } elseif ($d == 0) {
            $x = -$b / (2 * $a);
            $ecuacion = "Discriminante d = 0\nUna solucion (raiz doble):\nx = $x";
        } else {
            $ecuacion = "Discriminante d = $d (menor que 0)\nLa ecuacion no tiene solucion real.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales PHP - EduTech</title>
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
                <h1>&#10067; Condicionales en PHP</h1>
                <p>Decisiones con if y else, incluida la ecuación de segundo grado</p>
            </section>
            
            <section>
                <h2>¿Qué es un condicional?</h2>
                <div class="caja-destacada">
                    <p>
                        Un condicional permite que el programa tome decisiones. Con <strong>if</strong> (si) se comprueba
                        una condición: si se cumple se ejecuta un bloque; si no, con <strong>else</strong> (si no) se
                        ejecuta otro. Con <strong>elseif</strong> se encadenan varias condiciones. Prueba los
                        formularios: PHP evalúa la condición en el servidor y te muestra el camino que tomó.
                    </p>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 1</span>
                <h2>Par o impar</h2>
                <p>Con el operador % (resto) PHP decide si el número es par o impar.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">par_impar.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$n</span> = (<span class="kw">int</span>)<span class="var">$_POST</span>[<span class="str">'n'</span>];
  <span class="var">$resto</span> = <span class="var">$n</span> % <span class="num">2</span>;

  <span class="kw">if</span> (<span class="var">$resto</span> == <span class="num">0</span>) {
    <span class="kw">echo</span> <span class="str">"Es par"</span>;
  } <span class="kw">else</span> {
    <span class="kw">echo</span> <span class="str">"Es impar"</span>;
  }
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <label>Escribe un número entero</label>
                                <input type="number" name="n" value="<?php echo isset($_POST['n'])? htmlspecialchars($_POST['n']) : '7'; ?>" required>
                                <button type="submit" name="enviar_par">Comprobar</button>
                            </form>
                        </div>
                        <?php if ($tipo !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            <?php echo $tipo; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_cond_par_impar.svg" alt="Diagrama condicional: la decisión bifurca en par o impar." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">Diagrama condicional: la decisión bifurca en par o impar.</p>
                    </div>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo 2</span>
                <h2>Aprobar una materia</h2>
                <p>PHP compara la nota con 3.0 y decide si aprueba o reprueba.</p>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">aprobar.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$nota</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'nota'</span>];

  <span class="kw">if</span> (<span class="var">$nota</span> &gt;= <span class="num">3.0</span>) {
    <span class="kw">echo</span> <span class="str">"Aprueba"</span>;
  } <span class="kw">else</span> {
    <span class="kw">echo</span> <span class="str">"Reprueba"</span>;
  }
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Pruébalo tú mismo</h4>
                            <form method="post">
                                <label>Nota definitiva (0.0 a 5.0)</label>
                                <input type="number" step="any" name="nota" value="<?php echo isset($_POST['nota'])? htmlspecialchars($_POST['nota']) : '3.5'; ?>" required>
                                <button type="submit" name="enviar_nota">Verificar</button>
                            </form>
                        </div>
                        <?php if ($estado !== null): ?>
                        <div class="resultado-php">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            <?php echo $estado; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_cond_par_impar.svg" alt="La estructura es la misma de toda decisión: una condición y dos caminos." loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">La estructura es la misma de toda decisión: una condición y dos caminos.</p>
                    </div>
                </div>
            </section>
            <section class="algo-ejemplo">
                <span class="badge-php">Ejemplo destacado</span>
                <h2>&#128208; Ecuación general de segundo grado</h2>
                <div class="caja-info">
                    <p>
                        La ecuación de segundo grado tiene la forma <strong>a&middot;x&sup2; + b&middot;x + c = 0</strong>.
                        Se resuelve con la fórmula general, que depende del <strong>discriminante</strong>
                        d = b&sup2; - 4ac. Si d &gt; 0 hay dos soluciones reales, si d = 0 hay una sola, y si d &lt; 0 no
                        hay solución real. En PHP la raíz cuadrada se calcula con <strong>sqrt()</strong>. Cambia los
                        valores de a, b y c y presiona el botón para resolverla de verdad.
                    </p>
                </div>
                <div class="php-grid">
                    <div>
                        <div class="codigo-php">
                            <span class="pc-titulo">ecuacion_segundo_grado.php</span>
<pre><span class="tag">&lt;?php</span>
  <span class="var">$a</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'a'</span>];
  <span class="var">$b</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'b'</span>];
  <span class="var">$c</span> = (<span class="kw">float</span>)<span class="var">$_POST</span>[<span class="str">'c'</span>];

  <span class="com">// Discriminante: d = b^2 - 4ac</span>
  <span class="var">$d</span> = <span class="var">$b</span> * <span class="var">$b</span> - <span class="num">4</span> * <span class="var">$a</span> * <span class="var">$c</span>;

  <span class="kw">if</span> (<span class="var">$d</span> &gt; <span class="num">0</span>) {
    <span class="var">$x1</span> = (-<span class="var">$b</span> + <span class="fn">sqrt</span>(<span class="var">$d</span>)) / (<span class="num">2</span> * <span class="var">$a</span>);
    <span class="var">$x2</span> = (-<span class="var">$b</span> - <span class="fn">sqrt</span>(<span class="var">$d</span>)) / (<span class="num">2</span> * <span class="var">$a</span>);
    <span class="kw">echo</span> <span class="str">"Dos soluciones: $x1 y $x2"</span>;
  } <span class="kw">elseif</span> (<span class="var">$d</span> == <span class="num">0</span>) {
    <span class="var">$x</span> = -<span class="var">$b</span> / (<span class="num">2</span> * <span class="var">$a</span>);
    <span class="kw">echo</span> <span class="str">"Una solución: $x"</span>;
  } <span class="kw">else</span> {
    <span class="kw">echo</span> <span class="str">"No tiene solución real"</span>;
  }
<span class="tag">?&gt;</span></pre>
                        </div>
                        <div class="form-php">
                            <h4>&#9654;&#65039; Resuelve tu ecuación</h4>
                            <form method="post">
                                <div class="fila-campos">
                                    <div>
                                        <label>a</label>
                                        <input type="number" step="any" name="a" value="<?php echo isset($_POST['a'])? htmlspecialchars($_POST['a']) : '1'; ?>" required>
                                    </div>
                                    <div>
                                        <label>b</label>
                                        <input type="number" step="any" name="b" value="<?php echo isset($_POST['b'])? htmlspecialchars($_POST['b']) : '-5'; ?>" required>
                                    </div>
                                    <div>
                                        <label>c</label>
                                        <input type="number" step="any" name="c" value="<?php echo isset($_POST['c'])? htmlspecialchars($_POST['c']) : '6'; ?>" required>
                                    </div>
                                </div>
                                <button type="submit" name="enviar_ecuacion">Resolver ecuación</button>
                            </form>
                        </div>
                        <?php if ($ecuacion !== null): ?>
                        <div class="resultado-php <?php echo $ecuacion_clase; ?>">
                            <span class="res-titulo">Resultado calculado por PHP</span>
                            <?php echo nl2br(htmlspecialchars($ecuacion)); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="diagrama-caja">
                        <img src="../../img/php_cond_ecuacion.svg" alt="Diagrama de la ecuación de segundo grado" loading="lazy" style="max-width:100%;height:auto;">
                        <p class="leyenda">Diagrama con las tres ramas según el discriminante: dos raíces, una raíz o sin solución real.</p>
                    </div>
                </div>
            </section>
            <div class="navegacion-paginas">
                <a href="php_secuenciales.php" class="nav-anterior">&#8592; Secuenciales PHP</a>
                <a href="php_bucles.php" class="nav-siguiente">Bucles PHP &#8594;</a>
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