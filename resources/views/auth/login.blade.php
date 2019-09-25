@extends('layouts.home')
@section('content')
    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signin-popup-box static">
                            <div class="account-popup">
                                <span>Please use your registered Email address to login</span>
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="cfield">
                                        <input type="text" id="email" name="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="cfield">
                                        <input type="password" id="password" name="password" placeholder="********" class="form-control @error('password') is-invalid @enderror"  required autocomplete="current-password" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="la la-key"></i>
                                    </div>
                                    <p class="remember-label">
                                        <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
                                    </p>
                                    <a href="#" title="">Forgot Password?</a>
                                    <button type="submit">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                                <div class="extra-login">
                                    <span>Or</span>
                                    <div class="login-social">
                                        <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                                        <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- LOGIN POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
