

<!DOCTYPE html>

<html>
    <head>
        <link rel = "stylesheet" href="css/bootstrap.css">
        <title> Saran </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Bungee+Spice&family=Titan+One&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Titan One", sans-serif;
                background : #061C96FF;
                /*background-image: url("https://miro.medium.com/v2/resize:fit:640/format:webp/1*OAXivevUVDA6ddtq-7jwVw.gif");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed; */
                color: #ffffffff;
                display: flex;

            }


            .container {
                width: 600px;
                margin: 100px auto;
                padding: 20px;
                border: 2px solid #273EC0FF;
                border-radius: 10px;
                background: #273EC0FF;
                backdrop-filter: blur(3px);
            }

        </style>
        @stack('styles')
    </head>

    <body>
        <div class = "container">
            <h1>File Default</h1>
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
