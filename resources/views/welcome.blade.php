<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jean's Exam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>

    <body>
        <div class="text-center pt-3 mt-4">
            <h3>
                Greetings Welcome to my Laravel Midterm Exam <br>
                To access departures page type '/departures' and '/arrivals' for arrivals page
            </h3>
        </div>
    </body>
</html>
