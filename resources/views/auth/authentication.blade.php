<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset("css/bootstrap/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/tailwindCss/app.css") }}" rel="stylesheet">
    <link href="{{ asset("css/authentication/style-login-signup.css") }}" rel="stylesheet" />
    <link href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title> Donemod | Login</title>
</head>
<body>
    <div class="section">
      <img src="{{ asset("img/logo.png") }}" class="h-12 p-1" alt="Donemod Logo" style="margin:0 auto 0">
        <div class="container">
          <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                    {{-- Login & Register --}}
                    @yield("login")

                    {{-- Send Password Reset Link --}}
                    @yield('email')
                    
                    {{-- Reseting The Password --}}
                    @yield('reset')
            </div>
          </div>
        </div>
      </div>
</body>
</html>