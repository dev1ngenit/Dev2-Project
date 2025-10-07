<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../">
    <title>@yield('title', 'Metronic - Admin Dashboard')</title>
    <meta charset="utf-8" />
    <meta name="description"
          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue & Laravel versions." />
    <meta name="keywords"
          content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, admin template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Open Graph -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />

    <!-- Canonical -->
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/media/logos/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!-- Vendor Styles -->
    <link href="{{ asset('frontend/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Global Styles -->
    <link href="{{ asset('frontend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="bg-body">
<!--begin::Authentication - Password reset -->
<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat 
    bgi-size-contain bgi-attachment-fixed" 
    style="background-image: url('{{ asset('frontend/assets/media/illustrations/sketchy-1/14.png') }}')">

    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->
        <a href="{{ route('admin.login') }}" class="mb-12">
            <img alt="Logo" src="{{ asset('frontend/assets/media/logos/logo-1.svg') }}" class="h-40px" />
        </a>
        <!--end::Logo-->

        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form method="POST" action="{{ route('admin.password.email') }}" class="form w-100" id="kt_password_reset_form">
                @csrf

                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">{{ __('Forgot Password ?') }}</h1>
                    <div class="text-gray-400 fw-bold fs-4">
                        {{ __('Enter your email to reset your password.') }}
                    </div>
                </div>
                <!--end::Heading-->

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success d-flex align-items-center p-5 mb-10">
                        <span class="svg-icon svg-icon-2hx svg-icon-success me-3">...</span>
                        <div class="d-flex flex-column">
                            <h5 class="mb-1">Success</h5>
                            <span>{{ session('status') }}</span>
                        </div>
                    </div>
                @endif

                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email"
                           value="{{ old('email') }}"
                           class="form-control form-control-solid @error('email') is-invalid @enderror"
                           required autocomplete="email" autofocus />
                    @error('email')
                        <div class="fv-plugins-message-container invalid-feedback">
                            <div data-field="email" data-validator="notEmpty">{{ $message }}</div>
                        </div>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="submit" id="kt_password_reset_submit" 
                        class="btn btn-lg btn-primary fw-bolder me-4">
                        <span class="indicator-label">{{ __('Submit') }}</span>
                        <span class="indicator-progress">{{ __('Please wait...') }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                    <a href="{{ route('admin.login') }}" 
                       class="btn btn-lg btn-light-primary fw-bolder">
                        {{ __('Cancel') }}
                    </a>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->

    <!--begin::Footer-->
    <div class="d-flex flex-center flex-column-auto p-10">
        <div class="d-flex align-items-center fw-bold fs-6">
            <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
            <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
            <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Purchase</a>
        </div>
    </div>
    <!--end::Footer-->
</div>
<!--end::Authentication - Password reset-->

<!--begin::Javascript-->
<script>var hostUrl = "{{ asset('frontend/assets/') }}";</script>

<!-- Global JS -->
<script src="{{ asset('frontend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('frontend/assets/js/scripts.bundle.js') }}"></script>

<!-- Password Reset Custom Script -->
<script>
    // Form submission handler
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('kt_password_reset_form');
        const submitButton = document.getElementById('kt_password_reset_submit');

        if (form && submitButton) {
            form.addEventListener('submit', function(e) {
                // Show loading state
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                
                // Optional: Remove this if you want normal form submission
                // e.preventDefault();
                
                // If you want to handle form submission with AJAX, uncomment below:
                /*
                e.preventDefault();
                
                const formData = new FormData(form);
                
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;
                    
                    if (data.success) {
                        // Handle success
                        Swal.fire({
                            text: data.message,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    } else {
                        // Handle errors
                        Swal.fire({
                            text: data.message,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Try again!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                })
                .catch(error => {
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;
                    console.error('Error:', error);
                });
                */
            });
        }
    });
</script>

@stack('scripts')
<!--end::Javascript-->

</body>
<!--end::Body-->
</html>