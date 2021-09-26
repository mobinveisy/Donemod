@extends('auth.authentication')

@section('register')


{{-- <div class="card-back">
    <div class="center-wrap">
      <div class="section text-center">
        <img src="/img/logo.png" style="max-width: 34%; margin-bottom: 20px;">
        <h4 class="mb-4 pb-3">Sign Up</h4>
          <form method="POST" action="{{ route("register") }}">
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
  </div> --}}
  


 {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection