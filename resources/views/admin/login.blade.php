<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="It is the login page for admin. Please login with your email and password.">
    <title>Lion Werbe GmbH | Admin Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/asset/css/user/global.css') }}">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<div class="alert-messages">
    @if (Session::has('danger'))
        <p class="alert alert-danger" style="text-align: center;">
            {{ Session::get('danger') }}
        </p>
    @endif
</div>


<body class="antialiased">
    <section class="login_section">

        <div class="container">
            <div class="row justify-content-center">


                <div class="col-md-12" style="height: 100vh; display:flex; align-items:center;">
                    <div class="login_wrap">

                        @if (Session::has('danger'))
                            <p class="alert alert-danger" style="text-align: center;">
                                {{ Session::get('danger') }}
                            </p>
                        @endif
                        <!-- @if (Session::has('message'))
<p class="alert alert-danger" style="text-align: center;">
                            {{ Session::get('message') }}

                        </p>
@endif -->
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="back_btttn">
                            <a href="{{ asset('/') }}">
                                <i class="fa-solid fa-arrow-left"></i>
                                <!-- Back To Home Page -->
                                {{ __('home.backToHome') }}
                            </a>
                        </div>

                        <form method="GET" auto-complete="off" action="{{ __('routes.admin-sign-in') }}">
                            @csrf
                            <div class="heading_logo">
                                <div class="logo_img">
                                    <a href="{{ asset('/') }}">
                                        <img src="{{ asset('asset/images/lion_werbe_gmbh_logo.webp') }}" alt="empty"
                                            class="login_logo">
                                    </a>
                                </div>
                                <h1 class="login_heading">
                                    Administrator Login
                                </h1>

                            </div>
                            <div class="cred_txt">
                                <p> {{ __('home.login_lines') }}</p>
                            </div>
                            <div class="form_dv">
                                <label for="e1">E-Mail-Adresse</label>
                                <input type="email" placeholder="E-Mail-Adresse*" id="e1" name="email"
                                    required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form_dv">
                                <label for="p1">Passwort</label>
                                <input type="password" placeholder="Passwort*" id="p1"
                                    autocomplete="new-password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="lgg_resi">
                                <div class="submit_btn">
                                    <button type="submit">{{ __('home.login_b') }}</button>
                                </div>
                            </div>
                            <div class="lgg_resi">
                                <div class="resig_lnkk">
                                    <a href="{{ __('routes.customer-register') }}" style="color:#222">Passwort vergessen?</a>
                                </div>
                            </div>

                            <div class="footerrr">
                                <div class="fttrr_img">
                                    <img src="{{ asset('asset/images/lion_werbe_gmbh_logo.webp') }}" alt="empty">
                                </div>
                                <div class="copy_right_txt">
                                    <p>Copyright Lion Werbe GmbH</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
