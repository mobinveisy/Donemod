<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Donemod | Login</title>
  <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
  {{-- <link rel="stylesheet" type="text/css" href="/css/Bootstrap/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style2.css" />
</head>

<body>
  {{-- @yield('content') --}}
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3">
              <span>Log In </span>
              <span>Sign Up</span>
            </h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
            <label for="reg-log"></label>

            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <img src="/img/logo.png" alt="" style="max-width: 34%; margin-bottom: 20px;">
                      <h4 class="mb-4 pb-3">Log In</h4>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" required class="form-style" placeholder="{{ __('E-Mail Address') }}" id="email" autocomplete="off">
                          @error('email')
                                <strong>{{ $message }}</strong>
                          @enderror
                            <i class="input-icon uil uil-at"></i>
                          </div>  
                          <div class="form-group mt-2">
                            <input type="password" name="password" class="form-style" placeholder="{{ __('Password') }}" id="password" autocomplete="off">
                          @error('password')
                                <strong>{{ $message }}</strong>
                          @enderror
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <button type="submit" class="btn mt-4"> Submit </button>
                      </form>
                      {{-- @if (Route::has('password.request'))
                              <p class="mb-0 mt-4 text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}</a>
                              </p>
                          </a>
                      @endif --}}
                    </div>
                  </div>
                </div>

                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <img src="/img/logo.png" alt="" style="max-width: 34%; margin-bottom: 20px;">
                      <h4 class="mb-4 pb-3">Sign Up</h4>

                        <form action="{{ route('register') }}" method="POST">
                          @csrf
                            <div class="form-group">
                              <input type="text" name="name" autofocus class="form-style" placeholder="{{ __('Name') }}" id="name" autocomplete="off">
                              @error('name')
                                    <strong>{{ $message }}</strong>
                              @enderror
                              <i class="input-icon uil uil-user"></i>
                            </div>  
                            <div class="form-group mt-2">
                              <input type="email" name="email" required class="form-style" placeholder="{{ __('E-Mail Address') }}" id="email" autocomplete="off">
                              @error('email')
                                    <strong>{{ $message }}</strong>
                              @enderror
                              <i class="input-icon uil uil-at"></i>
                            </div>  
                            <div class="form-group mt-2">
                              <input type="password" name="password" required class="form-style" placeholder="{{ __('Password') }}" id="password" autocomplete="off">
                              @error('password')
                                  <strong>{{ $message }}</strong>
                              @enderror
                              <i class="input-icon uil uil-lock-alt"></i>
                            </div>
                            <button type="submit" class="btn mt-4"> Submit </button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>