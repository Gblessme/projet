<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <h1>OCNAMO</h1>
        <div class="logo">
            <img src="/Image/logo.jpg" alt="image">
            
        </div>
    
        <nav class="navbar">

            <ul class="ul_navbar">
                <li>
                    <a href="{{ route ('main.home') }}">Acceuil</a>
                </li>
                <li>
                    <a href="{{ route ('main.menu') }}">Menu</a>
                </li>
                <li>
                    <a href="{{ route ('main.cours') }}">Cours</a>
                </li>
                <li>
                    <a href="{{ route ('main.reservation') }}">Réservation</a>
                </li>
            </ul>
        </nav>
</header>
@yield('content')
<footer>
<!--todo-->
</footer>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>