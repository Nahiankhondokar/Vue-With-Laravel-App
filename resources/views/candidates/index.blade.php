<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Coding Test</title>

        <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <style>
         body {
            font-family: 'Roboto', sans-serif;
         }
      </style>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   </head>
   <body>
      <div id="app">

         <router-view></router-view>

      </div>


   <!-- custom file -->
   <script src="{{ asset('/js/app.js') }}"></script>
   

    </body>
</html>
