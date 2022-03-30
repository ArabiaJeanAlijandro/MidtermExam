<html>
    <head>
        <title>Laravel MidTerm Exam</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.master')

        @section ('content')
        <h2>Arrivals Manila Terminal 3</h2>
        @stop

        @section ('details')
        <table style="width:100%">
            <tr>
                <th>From</th>
                <th>Arrival Time</th>
                <th>Airline</th>
            </tr>
            <tr>
                <td>{{ $arrivalDetail }}</td>
                <td>{{ $time }}</td>
                <td>{{ $airline }}</td>
            </tr>
            
        </table>
        @stop  
        <style>
        table, th, td {
             border:2px solid black;
        }
        </style>  
    </body> 
</html>