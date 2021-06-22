<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>X Entertainment - Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="{{asset('auth/css/style.css')}}" type="text/css" media="all" />
    <!--//Style-CSS -->
</head>

<body style="background-color:#454444">

    <!-- form section start -->
    <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1 ><a class="brand-logo" href="index.html" style="color:#FE5518"><span>X Entertainment</span> Sign In</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src="{{ asset('auth/images/login_img.svg') }}" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">

                        <div class="login-form-content">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button class="btn btn-style mt-3">Sign In </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="color: white;" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                </label>

                                <p class="already" style="color: white;">Dont have an account? <a href="{{route('register')}}" style="color: #FE5518;">Sign Up</a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->

    </section>
    <!-- //form section start -->

</body>

</html>