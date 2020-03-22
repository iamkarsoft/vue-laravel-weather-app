<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather App</title>
        <link rel="stylesheet" href="/css/main.css">
        <!-- Fonts -->
        {{-- scripts --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/skycons/1396634940/skycons.js" integrity="sha256-nCLOiEB2E5Mk++5XNR0otwdCPrAteym9WaDVgKhtrE0=" crossorigin="anonymous" defer></script>
        <script src="/js/app.js" defer></script>


    </head>
    <body class="bg-blue-300" >
      <div id="app" class="flex justify-center px-16 py-4">
           <weather-app></weather-app>
        </div>
    </body>
</html>
