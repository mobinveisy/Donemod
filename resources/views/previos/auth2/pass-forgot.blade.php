@extends('login-register')

@section('content')
    
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3">
              <span>Recover your password </span>
            </h6>
         
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <img src="img/logo.png" alt="" style="max-width: 34%; margin-bottom: 20px;">
                      <h4 class="mb-4 pb-3">Forget your password</h4>
                      <h5 class="mb-4 pb-3">Enter your email</h5>
                      <div class="form-group">
                        <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail"
                          autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                      </div>
                      <a href="#" class="btn mt-4">recover my password</a>
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
  @endsection