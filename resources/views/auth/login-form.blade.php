<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 mx-auto">
                    @if ($login_error = Session::get('login-error'))
                        <div class="alert alert-danger color-info shadow">
                            {{ $login_error }}
                        </div>
                    @endif
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/finnaf-logo.png') }}" class='img-fluid mb-4'
                                    style="max-width:200px">
                                <h3>Connexion</h3>
                                <p>Veuillez remplir le formulaire pour vous connecter</p>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            @if ($errors->has('email'))
                                                <div class="text-danger my-1">{{ $errors->first('email') }}</div>
                                            @endif
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ @old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Mot de passe</label>
                                            @if ($errors->has('password'))
                                                <div class="text-danger my-1">{{ $errors->first('password') }}</div>
                                            @endif
                                            <input type="password" id="email" class="form-control" name="password"
                                                value=""
                                        </div>
                                    </div>
                                </diV>

                                <div class="clearfix">
                                    <button class="btn btn-primary" type="submit">Se connecter</button>
                                </div>
                            </form>
                            {{-- <div class="mt-3">
                                <a href="{{ route('registrationForm') }}">Vous n'avez pas de compte ? S'inscrire</a>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
