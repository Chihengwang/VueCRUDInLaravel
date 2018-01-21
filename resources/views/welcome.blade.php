<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel Todo app</title>
        <link rel="stylesheet" href="{{asset('public/asset/css/app.css')}}">


    </head>
    <body>
        <div class="container" id="app">

            <tasks></tasks>
        </div>


    <script src="{{asset('public/asset/js/app.js')}}"></script>
    </body>
</html>
