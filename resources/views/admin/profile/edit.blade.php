@extends('layouts.app')

@section('title', 'Account Settings')

@section('content')
<div class="card">
    <div class="card-body p-10">
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Avatar -->
            <div class="mb-10 text-center">
                <div class="symbol symbol-100px symbol-circle mb-3">
                    @if($admin->image)
                        <img src="{{ $admin->image_url }}" alt="Avatar" class="object-cover">
                    @else
                        <span class="symbol-label bg-light fs-1 text-gray-500">
                            {{ strtoupper(substr($admin->name, 0, 1)) }}
                        </span>
                    @endif
                </div>
                <div>
                    <label for="image" class="btn btn-sm btn-light-primary">Change Avatar</label>
                    <input type="file" name="image" id="image" class="d-none" accept="image/*">
                    @if($admin->image)
                        <button type="submit" name="remove_image" value="1" class="btn btn-sm btn-light-danger ms-2">
                            Remove
                        </button>
                    @endif
                    <div class="form-text mt-2">Allowed file types: png, jpg, jpeg.</div>
                </div>
            </div>

            <!-- Full Name -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Full Name <span class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <input type="text" name="full_name" value="{{ old('full_name', $admin->full_name) }}" class="form-control form-control-lg form-control-solid" required>
                </div>
            </div>

            <!-- Company -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Company <span class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <input type="text" name="company_name" value="{{ old('company_name', $admin->company_name) }}" class="form-control form-control-lg form-control-solid">
                </div>
            </div>

            <!-- Contact Phone -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Contact Phone</label>
                <div class="col-lg-8">
                    <input type="text" name="contact_phone" value="{{ old('contact_phone', $admin->contact_phone) }}" class="form-control form-control-lg form-control-solid">
                    <div class="form-text">Enter a valid phone number</div>
                </div>
            </div>

            <!-- Company Site -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Company Site</label>
                <div class="col-lg-8">
                    <input type="url" name="company_site" value="{{ old('company_site', $admin->company_site) }}" class="form-control form-control-lg form-control-solid" placeholder="https://example.com">
                </div>
            </div>

            <!-- Country -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Country</label>
                <div class="col-lg-8">
                    <select name="country" class="form-select form-select-lg form-select-solid">
                        <option value="">Select a country...</option>
                        <option value="USA" {{ old('country', $admin->country) == 'USA' ? 'selected' : '' }}>USA</option>
                        <option value="UK" {{ old('country', $admin->country) == 'UK' ? 'selected' : '' }}>UK</option>
                        <option value="BD" {{ old('country', $admin->country) == 'BD' ? 'selected' : '' }}>Bangladesh</option>
                    </select>
                </div>
            </div>

            <!-- Language -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Language <span class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <select name="language" class="form-select form-select-lg form-select-solid">
                        <option value="en" {{ old('language', $admin->language) == 'en' ? 'selected' : '' }}>English</option>
                        <option value="es" {{ old('language', $admin->language) == 'es' ? 'selected' : '' }}>Spanish</option>
                        <option value="fr" {{ old('language', $admin->language) == 'fr' ? 'selected' : '' }}>French</option>
                    </select>
                    <div class="form-text">Please select a preferred language.</div>
                </div>
            </div>

            <!-- Time Zone -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Time Zone</label>
                <div class="col-lg-8">
                    <select name="time_zone" class="form-select form-select-lg form-select-solid">
                        <option value="UTC" {{ old('time_zone', $admin->time_zone) == 'UTC' ? 'selected' : '' }}>UTC</option>
                        <option value="Asia/Dhaka" {{ old('time_zone', $admin->time_zone) == 'Asia/Dhaka' ? 'selected' : '' }}>Dhaka</option>
                        <option value="America/New_York" {{ old('time_zone', $admin->time_zone) == 'America/New_York' ? 'selected' : '' }}>New York</option>
                    </select>
                </div>
            </div>

            <!-- Currency -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Currency</label>
                <div class="col-lg-8">
                    <select name="currency" class="form-select form-select-lg form-select-solid">
                        <option value="USD" {{ old('currency', $admin->currency) == 'USD' ? 'selected' : '' }}>USD</option>
                        <option value="EUR" {{ old('currency', $admin->currency) == 'EUR' ? 'selected' : '' }}>EUR</option>
                        <option value="BDT" {{ old('currency', $admin->currency) == 'BDT' ? 'selected' : '' }}>BDT</option>
                    </select>
                </div>
            </div>

            <!-- Communication -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Communication</label>
                <div class="col-lg-8 d-flex gap-3">
                    <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" name="communication[]" value="email"
                               {{ in_array('email', old('communication', $admin->communication ?? [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Email</label>
                    </div>
                    <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" name="communication[]" value="phone"
                               {{ in_array('phone', old('communication', $admin->communication ?? [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Phone</label>
                    </div>
                </div>
            </div>

            <!-- Allow Marketing -->
            <div class="row mb-6">
                <label class="col-lg-4 fw-bold text-muted">Allow Marketing</label>
                <div class="col-lg-8">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" name="allow_marketing" value="1"
                               {{ old('allow_marketing', $admin->allow_marketing) ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-light me-3">Discard</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
