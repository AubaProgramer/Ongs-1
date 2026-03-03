<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio ONGs - Estructura</title>
    <link rel="stylesheet" href="{{ asset('css/estructural.css') }}">
</head>
<body class="contenedor-principal">

    <header class="area-header">
        <div class="logo-placeholder">LOGO</div>
        <nav class="menu-principal">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/sobre-nosotros">Sobre Nosotros</a></li>
                <li><a href="/directorio">Directorio</a></li>
                <li><a href="/participa">Participa</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenido-central">
        @yield('content')
    </main>

    <footer class="pie-pagina">
        <div class="footer-links">
            <p>© 2026 Directorio de ONGs - Estructural</p>
        </div>
    </footer>

</body>
</html>