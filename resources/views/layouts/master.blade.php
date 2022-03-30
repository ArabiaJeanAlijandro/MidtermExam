<html>
    <head>
        <title>Laravel Midterm</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>   
        <div class="container">
            <div class="pl-5 mt-4">
                @yield('content')
                @yield('greeting')
            </div>        
            
            <div class="pl-5 mt-4">
                @yield('details')
            </div>  
        </div>
    </body>
</html>
