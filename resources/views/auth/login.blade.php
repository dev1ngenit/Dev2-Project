<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login - Metronic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Fonts & Styles -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
 <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

</head>
<body id="kt_body" class="bg-body">

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">

        <!-- Aside -->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y text-center p-10 pt-lg-20">
                <a href="#" class="py-9 mb-5">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-2.svg') }}" class="h-60px" />
                </a>
                <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Metronic</h1>
                <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic<br />with great build tools</p>
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url('{{ asset('assets/media/illustrations/sketchy-1/13.png') }}')"></div>
            </div>
        </div>

        <!-- Body -->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    <form class="form w-100" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                            <div class="text-gray-400 fw-bold fs-4">
                              <a>  New Here? <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email" value="{{ old('email') }}" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                @if (Route::has('password.request'))
                                    <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mb-10">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                                <span class="ms-2 text-sm text-gray-600">Remember me</span>
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span>Continue</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
