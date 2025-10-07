<x-guest-layout>
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <a href="{{ url('/') }}" class="py-9 mb-5">
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo-2.svg') }}" class="h-60px" />
                        </a>
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Metronic</h1>
                        <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic <br/>with great build tools</p>
                    </div>
                   <div style="background-image: url('<?php echo asset('assets/media/illustrations/sketchy-1/13.png'); ?>');">
</div>

                </div>
            </div>
            <!--end::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                        <!-- Laravel Breeze Register Form -->
                        <form method="POST" action="{{ route('register') }}" class="form w-100">
                            @csrf
                            
                            <!-- Title -->
                            <div class="mb-10 text-center">
                                <h1 class="text-dark mb-3">Create an Account</h1>
                                <div class="text-gray-400 fw-bold fs-4">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                                </div>
                            </div>

            <!-- Name -->
<div class="row fv-row mb-7">
    <div class="col-xl-6">
        <label class="form-label fw-bolder text-dark fs-6">First Name</label>
        <input type="text" name="first_name" 
               value="{{ old('first_name') }}" required autofocus 
               class="form-control form-control-lg form-control-solid" />
        <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-danger" />
    </div>
    <div class="col-xl-6">
        <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
        <input type="text" name="last_name" 
               value="{{ old('last_name') }}" required
               class="form-control form-control-lg form-control-solid" />
        <x-input-error :messages="$errors->get('last_name')" class="mt-2 text-danger" />
    </div>
</div>

                            <!-- Email -->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" 
                                       required class="form-control form-control-lg form-control-solid" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>

                            <!-- Password -->
                            <div class="mb-10 fv-row">
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <input id="password" type="password" name="password" required 
                                       class="form-control form-control-lg form-control-solid" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                <div class="text-muted mt-2">Use 8 or more characters with letters, numbers & symbols.</div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="fv-row mb-5">
                                <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" required 
                                       class="form-control form-control-lg form-control-solid" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                            </div>

                            <!-- Terms -->
                            <div class="fv-row mb-10">
                                <label class="form-check form-check-custom form-check-solid form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" required />
                                    <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.
                                    </span>
                                </label>
                            </div>

                            <!-- Submit -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    <span class="indicator-label">Register</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
</x-guest-layout>
