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
        <div class="logo">
            <a href="{{ route ('main.home') }}"><img src="/Image/logo.jpg" alt="image"></a>
            
            
        </div>
    
        <nav class="navbar">

            <ul class="ul_navbar">
                <li class="li_navbar">
                    <a class="a_navbar" href="{{ route ('main.home') }}">Acceuil</a>
                </li>
                <li class="li_navbar">
                    <a class="a_navbar" href="{{ route ('main.menu') }}">Menu</a>
                </li>
                <li class="li_navbar">
                    <a class="a_navbar" href="{{ route ('main.cours') }}">Cours</a>
                </li>
                <li class="li_navbar">
                    <a class="a_navbar" href="{{ route ('main.reservation') }}">Réservation</a>
                </li>
                <li class="li_navbar">
                    <a class="a_navbar" href="{{ route ('main.contact') }}">Contact</a>
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
        <div >
            <p>PARLEZ DE NOUS!</p><br>
            <p>&copy; OCnamo</p> 
        </div>  
            <div class="pay">
                <a class="reseau" href="https://www.facebook.com/FormationsCnamLille/?locale=fr_FR"><img src="Image/footer.png" alt="" ></a>
                <a href="https://www.instagram.com/cnam_hautsdefrance/"><img src="Image/foter.png" alt=""></a>
                <a href="https://twitter.com/CnamNordPdC"><img src="Image/foot.png" alt=""></a>
            </div>
        <div>
            <p>
                <button><a href="{{ route ('main.reservation') }}">Réservation une table</a></button><br>
                <button><a href="{{ route ('main.cours') }}">Cours</a></button>
            </p>
        </div>
        <div>
            <p><a href="http://">Protection de données</a></p><br>
            <p><a href="{{ route ('main.mention') }}">Mentions légales</a></p>
        </div>
    </div>

</footer>
</body>
</html>