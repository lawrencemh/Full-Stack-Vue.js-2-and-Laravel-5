<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Vuebnb</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

        <!-- inject model data for Vue -->
        <script>
            window.vuebnb_listing_model = "{!! addslashes($listing->toJson()) !!}";
        </script>
    </head>
    <body>

        <div id="toolbar">
            <img class="icon" src="{{ asset('images/logo.png') }}">
            <h1>vuebnb</h1>
        </div>

        <div id="app">
            <listing></listing>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
