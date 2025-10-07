<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('/') }}">
    <title>Admin Login - Metronic</title>
    <meta charset="utf-8" />
    <meta name="description" content="Admin Login" />
    <meta name="keywords" content="Admin Login" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Admin Login" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/media/logos/favicon.ico') }}" />
    
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    
    <!--begin::Global Stylesheets Bundle-->
    <link href="{{ asset('frontend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{ asset('frontend/assets/media/illustrations/sketchy-1/14.png') }})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{ url('/') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('frontend/assets/media/logos/logo-1.svg') }}" class="h-40px" />
                </a>
                <!--end::Logo-->
                
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Sign In to Admin Panel</h1>
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="#" class="link-primary fw-bolder">Create an Account</a>
                            </div>
                        </div>
                        <!--end::Heading-->
                        
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email" value="{{ old('email') }}" autocomplete="off" required/>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" required />
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                    
                    <!--begin::Separator-->
                    <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                    <!--end::Separator-->
                    
                    <!-- Social login buttons -->
                    <div class="text-center">
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                            <img alt="Logo" src="{{ asset('frontend/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Continue with Google
                        </a>
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                            <img alt="Logo" src="{{ asset('frontend/assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3" />Continue with Facebook
                        </a>
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                            <img alt="Logo" src="{{ asset('frontend/assets/media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3" />Continue with Apple
                        </a>
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle-->
    <script src="{{ asset('frontend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    
    <!--begin::Page Custom Javascript-->
    <script src="{{ asset('frontend/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <!--end::Page Custom Javascript-->
</body>
</html>