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
            </ul>
        </nav>


</header>
@yield('content')
<footer>
    <footer class="footer">
        <p>&copy; Mention Légales</p>      <p> OCnamo</p>
</footer>

</body>
</html>