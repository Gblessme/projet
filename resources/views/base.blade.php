<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <header>
        <h1>OCNAMO</h1>
        <div class="logo">
            <img src="/public/Image/logo.jpg" alt="image">
            
        </div>
    
        <nav class="navbar">

            <ul>
                <li>
                    <a href="{{ route ('main.home') }}">Accueil</a>
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
                <li>
                    <a href="{{ route ('main.contact') }}">Contact</a>
                </li>
            </ul>
        </nav>


</header>
@yield('content')
<footer>
    <footer class="footer">
        <p>&copy; OCnamo</p>   <p>PARLEZ DE NOUS!</p>
        <div class="RS">
            <img src="Image/logofb.png" alt=""><img src="Image/logoinsta.png" alt="">
        </div>
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

            </div>
        </div>
</footer>

</body>
</html>