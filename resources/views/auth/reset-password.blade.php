
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Password reset -->
<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" 
     style="background-image: url('{{ asset('assets/media/illustrations/sketchy-1/14.png') }}')">

            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{ url('/') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-1.svg') }}" class="h-40px" />
                </a>
                <!--end::Logo-->

                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('password.store') }}" class="form w-100">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">{{ __('Reset Password') }}</h1>
                            <div class="text-gray-400 fw-bold fs-4">
                                {{ __('Enter your new password below.') }}
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!-- Email Address -->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email') }}</label>
                            <input class="form-control form-control-solid" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Password') }}</label>
                            <input class="form-control form-control-solid" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Confirm Password') }}</label>
                            <input class="form-control form-control-solid" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Actions -->
                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                            <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                                <span class="indicator-label">{{ __('Reset Password') }}</span>
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
        </div>
    </div>

