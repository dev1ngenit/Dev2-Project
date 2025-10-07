@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<!--begin::Container-->
<!--begin::Content-->

<div id="kt_content_container" class="container-xxl">
    <!--begin::Navbar-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('tenders.index') }}">Tenders</a>
    <a href="{{ route('marketing-plans.index') }}" class="btn btn-secondary ms-2">Marketing plan</a>
    <a href="/marketing-dmars" class="btn btn-primary">Enter Marketing DMAR System</a>

</li>

    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        @if($admin->image)
                            <img src="{{ $admin->image_url }}" alt="{{ $admin->name }}" class="profile-image" />
                        @else
                            <div class="symbol-label bg-primary fs-1 fw-bolder text-inverse-primary">
                                {{ substr($admin->name, 0, 1) }}
                            </div>
                        @endif
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                    </div>
                </div>
                <!--end::Pic-->

                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $admin->name }}</a>
                                <a href="#">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
                                            <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
                            </div>
                            <!--end::Name-->

                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
                                            <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Developer
                                </a>

                                @if($admin->country)
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        {{ $admin->country }}
                                    </a>
                                @endif

                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    {{ $admin->email }}
                                </a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->

                        <!--begin::Actions-->
                        <div class="d-flex my-4">
                            <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                <span class="svg-icon svg-icon-3 d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
                                        <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Indicator-->
                                <span class="indicator-label">Follow</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator-->
                            </a>
                            <a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                            <!--begin::Menu-->
                            <div class="me-0">
                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-three-dots fs-3"></i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Actions-->
                    </div>

                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1 pe-8">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">Earnings</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">Projects</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">Success Rate</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
                                <span class="fw-bolder fs-6">50%</span>
                            </div>
                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->

            <!--begin::Navs-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('admin.dashboard') }}">Overview</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a href="javascript:void(0);" class="nav-link text-active-primary ms-0 me-10 py-5" id="open-settings">
                        Settings
                    </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/security.html">Security</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/billing.html">Billing</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/statements.html">Statements</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/referrals.html">Referrals</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/api-keys.html">API Keys</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/logs.html">Logs</a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->
        </div>
    </div>
    <!--end::Navbar-->

    <!-- Profile Details Section -->
    <div id="profile-details-section">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Profile Details</h3>
                </div>
                <!--end::Card title-->
                <!--begin::Action-->
                <a href="javascript:void(0);" class="btn btn-primary align-self-center" id="edit-profile-btn">Edit Profile</a>
                <!--end::Action-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body p-9">
                <!-- Full Name -->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800" data-field="full_name">{{ $admin->full_name ?? $admin->name }}</span>
                    </div>
                </div>

                <!-- Company -->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Company</label>
                    <div class="col-lg-8">
                        <span class="fw-bold text-gray-800 fs-6" data-field="company_name">{{ $admin->company_name ?? 'Not set' }}</span>
                    </div>
                </div>

                <!-- Contact Phone -->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Contact Phone</label>
                    <div class="col-lg-8 d-flex align-items-center">
                        <span class="fw-bolder fs-6 text-gray-800 me-2" data-field="contact_phone">{{ $admin->contact_phone ?? 'Not set' }}</span>
                        @if(!empty($admin->contact_phone_verified))
                            <span class="badge badge-success">Verified</span>
                        @else
                            <span class="badge badge-secondary">Unverified</span>
                        @endif
                    </div>
                </div>

                <!-- Company Site -->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Company Site</label>
                    <div class="col-lg-8" data-field="company_site">
                        @if($admin->company_site)
                            <a href="{{ $admin->company_site }}" target="_blank" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $admin->company_site }}</a>
                        @else
                            <span class="text-gray-800">Not set</span>
                        @endif
                    </div>
                </div>

                <!-- Country -->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Country</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800" data-field="country">{{ $admin->country ?? 'Not set' }}</span>
                    </div>
                </div>

                <!-- Communication -->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Communication</label>
                    <div class="col-lg-8" data-field="communication">
                        @if($admin->communication_preferences)
                            @foreach($admin->communication_preferences as $preference)
                                <span class="badge badge-light text-dark me-1">{{ $preference }}</span>
                            @endforeach
                        @else
                            <span class="text-gray-800">Not set</span>
                        @endif
                    </div>
                </div>

                <!-- Allow Changes -->
                <div class="row mb-10">
                    <label class="col-lg-4 fw-bold text-muted">Allow Changes</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800" data-field="allow_changes">{{ $admin->allow_changes ? 'Yes' : 'No' }}</span>
                    </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>

    <!-- Settings Form Card (Initially Hidden) -->
    <div id="settings-section" class="d-none">
        <div class="card">
            <div class="card-body p-10">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Avatar -->
                    <div class="mb-10 text-center">
                        <label class="form-label fw-bold">Avatar <span class="text-danger">*</span></label>
                        <div class="symbol symbol-100px symbol-circle mx-auto mb-3 position-relative">
                            @if($admin->image)
                                <img src="{{ $admin->image_url }}" alt="Avatar" class="object-cover rounded-circle w-100">
                                <label for="image" class="position-absolute top-0 end-0 translate-middle btn btn-icon btn-sm btn-light-primary rounded-circle">
                                    <i class="bi bi-pencil-fill fs-6"></i>
                                </label>
                                <button type="submit" name="remove_image" value="1" class="position-absolute bottom-0 end-0 btn btn-icon btn-sm btn-light-danger rounded-circle">
                                    <i class="bi bi-x fs-6"></i>
                                </button>
                            @else
                                <label for="image" class="symbol-label bg-light fs-1 text-gray-500 rounded-circle w-100 h-100 d-flex align-items-center justify-content-center cursor-pointer">
                                    {{ strtoupper(substr($admin->name, 0, 1)) }}
                                </label>
                            @endif
                            <input type="file" name="image" id="image" class="d-none" accept="image/*">
                        </div>
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    </div>

                    <!-- Full Name -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Full Name <span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" name="full_name" value="{{ old('full_name', $admin->full_name) }}" class="form-control form-control-lg form-control-solid" required>
                            <input type="hidden" name="name" value="{{ old('name', $admin->name) }}" id="name_field">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Email <span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="email" name="email" value="{{ old('email', $admin->email) }}" class="form-control form-control-lg form-control-solid" required>
                            <div class="form-text">Your primary email address</div>
                        </div>
                    </div>

                    <!-- Company -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Company <span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" name="company_name" value="{{ old('company_name', $admin->company_name) }}" class="form-control form-control-lg form-control-solid">
                        </div>
                    </div>

                    <!-- Contact Phone -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Contact Phone</label>
                        <div class="col-lg-8">
                            <input type="text" name="contact_phone" value="{{ old('contact_phone', $admin->contact_phone) }}" class="form-control form-control-lg form-control-solid">
                            <div class="form-text">Enter a valid phone number</div>
                        </div>
                    </div>

                    <!-- Company Site -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Company Site</label>
                        <div class="col-lg-8">
                            <input type="url" name="company_site" value="{{ old('company_site', $admin->company_site) }}" class="form-control form-control-lg form-control-solid" placeholder="https://example.com">
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Country</label>
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
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Language <span class="text-danger">*</span></label>
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
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Time Zone</label>
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
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Currency</label>
                        <div class="col-lg-8">
                            <select name="currency" class="form-select form-select-lg form-select-solid">
                                <option value="USD" {{ old('currency', $admin->currency) == 'USD' ? 'selected' : '' }}>USD</option>
                                <option value="EUR" {{ old('currency', $admin->currency) == 'EUR' ? 'selected' : '' }}>EUR</option>
                                <option value="BDT" {{ old('currency', $admin->currency) == 'BDT' ? 'selected' : '' }}>BDT</option>
                            </select>
                        </div>
                    </div>

                    <!-- Communication Preferences -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Communication</label>
                        <div class="col-lg-8 d-flex gap-3">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="communication_preferences[]" value="email"
                                    {{ in_array('email', old('communication_preferences', $admin->communication_preferences ?? [])) ? 'checked' : '' }}>
                                <label class="form-check-label">Email</label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="communication_preferences[]" value="phone"
                                    {{ in_array('phone', old('communication_preferences', $admin->communication_preferences ?? [])) ? 'checked' : '' }}>
                                <label class="form-check-label">Phone</label>
                            </div>
                        </div>
                    </div>

                    <!-- Allow Marketing -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold text-muted">Allow Marketing</label>
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
    </div>
</div>
<!--end::Container-->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const settingsLink = document.getElementById('open-settings');
    const profileSection = document.getElementById('profile-details-section');
    const settingsSection = document.getElementById('settings-section');
    const settingsForm = document.querySelector('#settings-section form');
    const fileInput = document.getElementById('image');
    const fileLabel = document.querySelector('label[for="image"]');
    const fullNameInput = document.querySelector('input[name="full_name"]');
    const nameInput = document.getElementById('name_field');

    // Toggle settings view
    settingsLink?.addEventListener('click', function() {
        profileSection.classList.toggle('d-none');
        settingsSection.classList.toggle('d-none');

        // Update nav active state
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });

    // Avatar file input click
    if (fileInput && fileLabel) {
        fileLabel.addEventListener('click', function(e) {
            e.preventDefault();
            fileInput.click();
        });
    }

    // Sync full_name input with name
    if (fullNameInput && nameInput) {
        fullNameInput.addEventListener('input', function() {
            nameInput.value = this.value;
        });
    }

    // AJAX form submission
    if (settingsForm) {
        settingsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;

            // Show loading
            submitButton.disabled = true;
            submitButton.textContent = 'Saving...';

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showToast('success', data.message || 'Profile updated successfully!');
                    updateProfileDetails(data.admin);

                    // Switch back to profile view after 2s
                    setTimeout(() => {
                        profileSection.classList.remove('d-none');
                        settingsSection.classList.add('d-none');
                        settingsLink.classList.remove('active');
                    }, 2000);
                } else {
                    showToast('error', data.message || 'Error updating profile!');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('error', 'An error occurred while updating profile!');
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.textContent = originalText;
            });
        });
    }

    // Update profile details in DOM
    function updateProfileDetails(adminData) {
        if (!adminData) return;

        document.querySelector('[data-field="full_name"]').textContent = adminData.full_name || adminData.name;
        document.querySelector('[data-field="company_name"]').textContent = adminData.company_name || 'Not set';
        document.querySelector('[data-field="contact_phone"]').textContent = adminData.contact_phone || 'Not set';

        const companySiteElement = document.querySelector('[data-field="company_site"]');
        companySiteElement.innerHTML = adminData.company_site
            ? `<a href="${adminData.company_site}" target="_blank" class="fw-bold fs-6 text-gray-800 text-hover-primary">${adminData.company_site}</a>`
            : '<span class="text-gray-800">Not set</span>';

        document.querySelector('[data-field="country"]').textContent = adminData.country || 'Not set';

        // Communication preferences
        const communicationElement = document.querySelector('[data-field="communication"]');
        let communicationPrefs = adminData.communication_preferences || [];

        if (typeof communicationPrefs === 'string') {
            try { communicationPrefs = JSON.parse(communicationPrefs); }
            catch (e) { communicationPrefs = []; }
        }

        communicationElement.innerHTML = communicationPrefs.length > 0
            ? communicationPrefs.map(pref => `<span class="badge badge-light text-dark me-1">${pref}</span>`).join('')
            : '<span class="text-gray-800">Not set</span>';

        // Avatar
        if (adminData.image_url) {
            const avatarImg = document.querySelector('.profile-image');
            if (avatarImg) avatarImg.src = adminData.image_url;
        }
    }

    // Simple toast function (replace with your library if needed)
    function showToast(type, message) {
        if (type === 'success') alert('Success: ' + message);
        else alert('Error: ' + message);
    }
});
</script>
@endsection
