<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset("css/TailwindCss/app.css") }}" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet" >
    <link href="{{ asset("css/fontawesome/all.css") }}" rel="stylesheet" >
    <title> Donemod </title>
</head>
<body>
    <main>
        @yield('login')
        @yield('content')
    </main>
    
    <script src="{{ asset("js/FontAwesome/all.min.js") }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ asset("js/jquery/jqueryHandler.js") }}"></script>
</body>
</html>