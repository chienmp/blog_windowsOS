<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css')  }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/flag-icon-css/css/flag-icon.css') }}">
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">{{ trans('Register') }}</h2>
                        <p class="require-field">* {{ trans('require_text')}}</p>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" placeholder="{{ trans('your_name') }}" />

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email"
                                class="@error('email') is-invalid @enderror" placeholder="{{ trans('your_email') }}" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"
                                class="@error('password') is-invalid @enderror" id="pass" placeholder="{{ trans('password') }}" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation"
                                id="re_pass" placeholder="{{ trans('password_repeat') }}" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="{{ trans('Register') }}" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">{{ trans('lang') }}</span>
                            <ul class="socials">
                                <li><a href="{{ route('lang',['lang' => 'vi']) }}"><i class="display-flex-center flag-icon flag-icon-vn"></i></a></li>
                                <li><a href="{{ route('lang',['lang' => 'en']) }}"><i class="display-flex-center flag-icon flag-icon-gb"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">{{ trans('oldmember') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
