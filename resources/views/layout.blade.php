<html>

<head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
        rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{url('js\tendina.js')}}" defer></script>
        <link rel="stylesheet" href="{{url('css/tendina.css')}}">
        <link rel="stylesheet" href="{{url('css/footer.css')}}">
        @yield('extra_head')

</head>

    <body>
        <div id="menu_tendina" class="hidden">
                <img class="croce_tendina" src="https://dictionary.cambridge.org/it/images/thumb/cross_noun_002_09265.jpg?version=6.0.21">
                <a href="{{url('index')}}"><h3>Home</h3></a>
                <a href="{{url('RestApi')}}"><h3>Api</h3></a>
                <a href="{{url('login')}}"><h3>Login/Registrazione</h3></a>

        </div>
        <article>
            
            @yield('inizio_div')
            @include('nav_header')

            @yield('fine_div')
            
            @yield('content')
        
            @include('footer')

        </article>

        

    </body>


</html>