

<!DOCTYPE html>

<html>
    <head>
        <link rel = "stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <title> Saran </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Mitr", sans-serif;
                background : #061C96FF;
                /*background-image: url("https://miro.medium.com/v2/resize:fit:640/format:webp/1*OAXivevUVDA6ddtq-7jwVw.gif");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed; */
                color: #ffffffff;
                display: flex;
            }

            .container {
                width:100%;
                max-width: 1000px;
                margin: 100px auto;
                padding: 20px;
                border: 2px solid #273EC0FF;
                border-radius: 10px;
                background: #273EC0FF;
                backdrop-filter: blur(3px);
            }
            table {
                width: 100%;
                table-layout:auto;
                background: white;
                color: black;
            }

            th, td {
                text-align: center;
                vertical-align: middle;
            }



        </style>
        @stack('styles')
    </head>

    <body>
        <div class = "container">
            @yield('header')

            @yield('content')
            @yield('content1')
        </div>
        @stack('scripts')
    </body>
</html>
