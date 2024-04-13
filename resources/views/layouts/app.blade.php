<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menús Laravel</title>
    <!-- Enlace a CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Menú de navegación -->
        <nav>
            <ul>
                <li class="{{ request()->is('/') ? 'active' : 'inactive' }}"><a href="{{ url('/') }}">Casa</a></li>
                <li class="{{ request()->is('fotos') ? 'active' : 'inactive' }}"><a href="{{ url('/fotos') }}">Fotos</a></li>
                <li class="{{ request()->is('contacto') ? 'active' : 'inactive' }}"><a href="{{ url('/contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Este es el pie de página común a todas las páginas.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<style>
    a{
        color: #000
    }
    .inactive{
        color: #fff;
    }
    .active {
    font-weight: bold;
    color: #4CAF50;
}
</style>