<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <p>Hello from laravel</p>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('be7742d45ed680a3f68e', {
            cluster: 'ap1'
            });

            var channel = pusher.subscribe('popup-channel');
            channel.bind('user-shout', function(data) {
            alert(JSON.stringify(data));
            });
        </script>
 

    </head>
    <body>
        <div id='example'></div>
        <script src="/js/app.js"></script>
    </body>
</html>
