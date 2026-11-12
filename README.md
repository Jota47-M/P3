# 🚀 Proyecto Educativo EduTech

## Descripción

**EduTech** es un sitio web educativo interactivo diseñado para estudiantes de grado décimo. Proporciona contenido multimedia sobre mujeres científicas, historia de la computación, programación de software y más. El proyecto está completamente desarrollado en **HTML5** y **CSS3**, con un archivo CSS externo para facilitar la enseñanza y el mantenimiento.

---

## 📋 Características Principales

✅ **Menú Principal con Submenús Desplegables** - Navegación intuitiva y jerárquica  
✅ **4 Secciones Principales** - Cada una con 3-4 subsecciones  
✅ **Contenido Multimedia** - Videos embebidos, audios, imágenes y gráficos  
✅ **Diseño Responsive** - Funciona en computadoras, tablets y dispositivos móviles  
✅ **Cajas de Texto Estilizadas** - Tarjetas, alertas, cuadros destacados  
✅ **Tablas Comparativas** - Información organizada y visual  
✅ **Líneas de Tiempo** - Visualización de eventos históricos  
✅ **Footer Completo** - Con enlaces, redes sociales y copyright  
✅ **Colores Atractivos** - Paleta profesional y educativa  
✅ **CSS Externo** - Archivo `estilos.css` separado para fácil mantenimiento  

---

## 📁 Estructura del Proyecto

```
proyecto-educativo/
├── index.html                          # Página principal
├── css/
│   └── estilos.css                     # Estilos CSS externos
├── paginas/
│   ├── opcion1/                        # Mujeres Científicas
│   │   ├── mujeres_sistemas.html
│   │   ├── mujeres_matematica.html
│   │   └── mujeres_medicina.html
│   ├── opcion2/                        # Historia de la Computación
│   │   ├── historia_computacion.html
│   │   ├── pioneros_computacion.html
│   │   ├── evolucion_computadoras.html
│   │   └── internet_historia.html
│   ├── opcion3/                        # Programación de Software
│   │   ├── intro_programacion.html
│   │   ├── lenguajes_programacion.html
│   │   ├── paradigmas_programacion.html
│   │   └── desarrollo_software.html
│   └── opcion4/                        # Acerca de
│       ├── acerca_proyecto.html
│       ├── autores.html
│       ├── recursos.html
│       └── contacto.html
├── media/                              # Carpeta para recursos multimedia
│   ├── videos/
│   ├── audios/
│   └── imagenes/
└── README.md                           # Este archivo
```

---

## 🎯 Contenido por Sección

### 1️⃣ OPCIÓN 1: Mujeres Científicas

**Subsecciones:**
- **Mujeres en Sistemas** - Ada Lovelace, Grace Hopper, Hedy Lamarr
- **Mujeres en Matemática** - Emmy Noether, Sofía Kovalévskaya, Katherine Johnson
- **Mujeres en Medicina** - Marie Curie, Lise Meitner, Rosalind Franklin

**Características:**
- Biografías detalladas
- Datos curiosos
- Contribuciones principales
- Tablas comparativas
- Líneas de tiempo
- Videos educativos
- Audios informativos

---

### 2️⃣ OPCIÓN 2: Historia de la Computación

**Subsecciones:**
- **Introducción Histórica** - Eras de la computación
- **Pioneros de la Computación** - Alan Turing, Von Neumann, Steve Jobs
- **Evolución de Computadoras** - De mainframes a smartphones
- **Internet e Informática** - Hitos de Internet y tecnologías clave

**Características:**
- Líneas de tiempo históricas
- Generaciones de computadoras
- Hitos tecnológicos
- Estadísticas globales
- Tablas comparativas

---

### 3️⃣ OPCIÓN 3: Programación de Software

**Subsecciones:**
- **Introducción a la Programación** - Conceptos fundamentales
- **Lenguajes de Programación** - Python, Java, JavaScript, C++, etc.
- **Paradigmas de Programación** - OOP, Funcional, Declarativo
- **Desarrollo de Software** - SDLC, metodologías, herramientas

**Características:**
- Conceptos clave explicados
- Ejemplos de código
- Tablas comparativas
- Metodologías de desarrollo
- Herramientas profesionales

---

### 4️⃣ OPCIÓN 4: Acerca de

**Subsecciones:**
- **Acerca del Proyecto** - Objetivos y misión
- **Autores y Créditos** - Equipo de desarrollo
- **Recursos Educativos** - Enlaces y referencias
- **Contacto** - Formulario y información de contacto

**Características:**
- Formulario de contacto
- Información de ubicación
- Preguntas frecuentes
- Enlaces a plataformas educativas
- Libros recomendados

---

## 🎨 Elementos de Diseño

### Cajas de Contenido
- **Caja Destacada** - Información importante con borde azul
- **Caja Info** - Información general con fondo claro
- **Caja Éxito** - Información positiva con borde verde
- **Caja Advertencia** - Información importante con borde naranja
- **Caja Importante** - Información crítica con fondo rojo

### Componentes Visuales
- **Tarjetas** - Para presentar información de forma visual
- **Tablas** - Para comparativas y datos estructurados
- **Líneas de Tiempo** - Para eventos históricos
- **Infografías** - Para estadísticas y datos numéricos
- **Botones** - Para llamadas a acción

### Navegación
- **Menú Principal** - Con submenús desplegables
- **Navegación entre Páginas** - Botones anterior/siguiente
- **Footer** - Con enlaces y redes sociales

---

## 🚀 Cómo Usar el Proyecto

### 1. Abrir en Sublime Text

```bash
# Abre Sublime Text
subl /home/ubuntu/proyecto-educativo/

# O desde Sublime: File > Open Folder > proyecto-educativo
```

### 2. Ver en el Navegador

```bash
# Opción 1: Abrir directamente
open index.html

# Opción 2: Usar un servidor local
python3 -m http.server 8000
# Luego visita: http://localhost:8000
```

### 3. Estructura de Archivos para Enseñanza

**Muestra a los estudiantes:**
1. El archivo `index.html` - Estructura HTML
2. El archivo `css/estilos.css` - Estilos CSS
3. Cómo se conectan con `<link rel="stylesheet" href="css/estilos.css">`
4. Cómo funcionan los menús desplegables
5. Cómo se crean tarjetas y cajas

---

## 📝 Archivos Principales

### index.html (Página Principal)
- Menú navegable con 4 opciones principales
- Sección hero con bienvenida
- Tarjetas de opciones principales
- Características del sitio
- Estadísticas
- Footer completo

### css/estilos.css (Estilos Externos)
- Variables CSS personalizadas
- Estilos para header y navegación
- Estilos para menús desplegables
- Estilos para cajas y tarjetas
- Estilos responsive
- Animaciones y transiciones
- Media queries para dispositivos móviles

### Páginas de Contenido
Cada página incluye:
- Header con navegación completa
- Sección hero
- Contenido principal con múltiples elementos
- Navegación entre páginas
- Footer

---

## 🎓 Cómo Enseñar con Este Proyecto

### Lección 1: Estructura HTML
Muestra cómo el `index.html` está estructurado con:
- `<header>` - Encabezado
- `<nav>` - Navegación
- `<main>` - Contenido principal
- `<footer>` - Pie de página

### Lección 2: Menús Desplegables
Explica cómo funcionan los submenús:
```html
<li class="menu-item">
    <a href="#">Opción Principal</a>
    <ul class="submenu">
        <li><a href="#">Subopciones</a></li>
    </ul>
</li>
```

### Lección 3: CSS Externo
Muestra cómo se vincula:
```html
<link rel="stylesheet" href="css/estilos.css">
```

### Lección 4: Componentes Reutilizables
Explica cómo se usan clases CSS para:
- Tarjetas (`.tarjeta`)
- Cajas (`.caja-destacada`, `.caja-info`)
- Botones (`.boton`)
- Tablas (estilos de `<table>`)

### Lección 5: Responsive Design
Muestra las media queries para diferentes tamaños de pantalla

---

## 🛠️ Personalización

### Cambiar Colores
Edita las variables en `css/estilos.css`:
```css
:root {
    --color-primario: #2c3e50;
    --color-secundario: #e74c3c;
    --color-acento: #3498db;
    /* ... más colores */
}
```

### Agregar Contenido Multimedia
1. Coloca archivos en la carpeta `media/`
2. Referencia en HTML:
```html
<!-- Video -->
<div class="contenedor-video">
    <iframe src="URL_VIDEO"></iframe>
</div>

<!-- Audio -->
<div class="contenedor-audio">
    <audio controls>
        <source src="media/audios/archivo.mp3">
    </audio>
</div>

<!-- Imagen -->
<img src="media/imagenes/foto.jpg" alt="Descripción">
```

### Agregar Nuevas Páginas
1. Copia una página existente
2. Modifica el contenido
3. Actualiza los enlaces en el menú
4. Asegúrate de que los paths relativos sean correctos

---

## 📱 Características Responsive

El sitio se adapta automáticamente a:
- **Computadoras de escritorio** - Menú horizontal completo
- **Tablets** - Menú adaptado
- **Dispositivos móviles** - Menú colapsable

Breakpoints:
- `768px` - Tablet
- `480px` - Móvil

---

## 🎯 Objetivos Educativos

Este proyecto permite enseñar:

1. **HTML5** - Estructura semántica
2. **CSS3** - Estilos avanzados, flexbox, grid
3. **Diseño Responsive** - Media queries
4. **Navegación Web** - Menús y enlaces
5. **Buenas Prácticas** - Código limpio y organizado
6. **Contenido Educativo** - Información sobre mujeres en STEM

---

## 📚 Recursos Incluidos

- ✅ 16 páginas HTML completamente funcionales
- ✅ 1 archivo CSS externo con 700+ líneas de estilos
- ✅ Contenido educativo sobre 9 mujeres científicas
- ✅ Historia de la computación desde 1600s hasta hoy
- ✅ Conceptos de programación y desarrollo de software
- ✅ Recursos educativos y enlaces útiles
- ✅ Formulario de contacto
- ✅ Diseño profesional y atractivo

---

## 🔧 Requisitos

- Navegador web moderno (Chrome, Firefox, Safari, Edge)
- Editor de texto (Sublime Text, VS Code, etc.)
- Conexión a Internet (para videos embebidos)

---

## 📄 Licencia

Este proyecto está bajo licencia **Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International**. Puedes usarlo, modificarlo y compartirlo con fines educativos.

---

## 👥 Autores

Proyecto desarrollado como recurso educativo para estudiantes de grado décimo.

---

## 📞 Contacto y Soporte

Para preguntas, sugerencias o reportar errores, usa el formulario de contacto en la página `paginas/opcion4/contacto.html`.

---

## 🎉 ¡Disfruta Enseñando!

Este proyecto está diseñado para inspirar a los estudiantes a explorar la ciencia, la tecnología y el papel fundamental que las mujeres han jugado en su desarrollo.

**¡Que sea un éxito en tu clase!** 🚀
