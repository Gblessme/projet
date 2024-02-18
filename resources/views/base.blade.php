<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <script  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
<div id="google_translate_element"></div>
<footer>
    <div class="footcontain">
        <div>
            <p><a href="mailto:ocamo@notre-restaurant.com">ocamo@notre-restaurant.com</a></p>
            <br>
            <p><a href="https://maps.app.goo.gl/Dbrn5azEyVHb2d457">5 Bd Louis XIV</a></p>
            <p><a href="https://maps.app.goo.gl/Dbrn5azEyVHb2d457">59800 Lille</a></p>
        </div>
        <div>
            <button><a href="{{ route ('main.reservation') }}">Réservation une table</a></button>
            <button><a href="{{ route ('main.cours') }}">Cours</a></button>
        </div>
        <div>
            <p><a href="http://">Protection de données</a></p>
            <p><a href="{{ route ('main.mention') }}">Mentions légales</a></p>
        </div>
    </div>

</footer>
</body>
</html>