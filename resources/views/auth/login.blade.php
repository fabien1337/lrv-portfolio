<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fabien MUNOZ - Administration</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
    <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/pulse.min.css')}}">
</head>
<body>
    <div id="page-container" class="main-content-boxed">
        <main id="main-container">
            <div class="bg-body-dark bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-6 col-xl-4">
                        <div class="content content-full overflow-hidden">
                            <div class="py-30 text-center">
                                <a class="link-effect font-w700" href="{{route('front.homepage')}}">
                                    <img src="{{asset('images/logo/logo9.png')}}" alt="Fabien MUNOZ logo">
                                </a>
                            </div>

                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="login-username">{{__('admin.email')}}</label>
                                                <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="login-password">{{__('admin.password')}}</label>
                                                <input type="password" class="form-control" name="password" value="{{old('password')}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-6 d-sm-flex align-items-center push">
                                                <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                    <input id="remember_me" name="remember" type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label" for="remember_me">{{__('admin.remember_me')}}</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-right push">
                                                <button type="submit" class="btn btn-alt-primary">
                                                    <i class="si si-login mr-10"></i> {{__('admin.sign_in')}}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>