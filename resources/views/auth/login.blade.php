@extends('auth.authentication')

@section('login')

{{-- Login --}}
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
                <h4 class="mb-4 pb-3 text-2xl">Log In</h4>
                <form method="POST" action="login">
                  @csrf
                    <div class="form-group">
                      <input type="email" name="email" required class="form-style" placeholder="{{ __('E-Mail Address') }}" id="email" autocomplete="off">
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
                    <br>{{-- <a href="" class="btn btn-google mt-4">  Login With <img src="/img/google.png" class="ml-2" alt=""> </a> --}}
                </form>
                @if (Route::has('password.request'))
                        <p class="mb-0 mt-4 text-center">
                          <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}</a>
                        </p>
                    </a>
                @endif
              </div>        
        </div>
      </div>
     
    
    {{-- Register --}}
      <div class="card-back">
        <div class="center-wrap">
          <div class="section text-center">
            <h4 class="mb-4 pb-3 text-2xl">Sign Up</h4>
              <form method="POST" action="register">
                @csrf
                  <div class="form-group">
                    <input type="text" name="name" autofocus class="form-style  @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" id="name" autocomplete="off">
                    @error('name')
                          <strong>{{ $message }}</strong>
                    @enderror
                    <i class="input-icon uil uil-user"></i>
                  </div>  
                  <div class="form-group mt-2">
                    <input type="email" name="email" required class="form-style @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" id="email" autocomplete="off">
                    @error('email')
                          <strong>{{ $message }}</strong>
                    @enderror
                    <i class="input-icon uil uil-at"></i>
                  </div>  
                  <div class="form-group mt-2">
                    <input type="password" name="password" required class="form-style @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" id="password" autocomplete="off">
                    @error('password')
                        <strong>{{ $message }}</strong>
                    @enderror
                    <i class="input-icon uil uil-lock-alt"></i>
                  </div>
    
                  <div class="form-group mt-1">
                    <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-style" name="password_confirmation" required autocomplete="new-password">
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
@endsection