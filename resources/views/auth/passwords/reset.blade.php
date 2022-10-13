@extends('layouts.masterLogin')


@section('content')
    <!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-1" style="background-image: url(assets/media/misc/auth-bg.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Image-->
						<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset("assets/media/loginimg.png") }}" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed
                            <br />and provides some background information about
                            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                            <br />work following this is a transcript of the interview.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Aside-->
                    <!--begin::Body-->
                    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-2">
                        <!--begin::Form-->
                        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                            <!--begin::Wrapper-->
                            <div class="w-lg-500px p-10">
                                <!--begin::Form-->
                                <form method="POST"  class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('password.update') }}" >
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-11">
                                        <!--begin::Title-->
                                        <h1 class="text-dark fw-bolder mb-3">Reset Password</h1>
                                        <!--end::Title-->
                                        <!--begin::Subtitle-->
                                        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                                        <!--end::Subtitle=-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-8">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                        <!--begin::Email-->
                                        <input name="email" id="email" type="email" placeholder="Email" class="form-control bg-transparent"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <!--end::Email-->
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>
                                        <!--begin::Password-->
                                <input id="password" type="password" placeholder="Password" class="form-control bg-transparent " name="password" required autocomplete="current-password">
                                        <!--end::Password-->
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input name="password_confirmation" id="password-confirm" placeholder="Confirm Password" type="password" class="form-control bg-transparent"  required autocomplete="new-password">
                                </div>
                                    <!--end::Input group=-->
                                    <!--end::Input group=-->
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button type="submit" class="btn btn-primary">
                                          Reset Password
                                        </button>
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                    
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Form-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-center flex-wrap px-5">
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold text-primary fs-base">
                                <a href="../../demo13/dist/pages/team.html" class="px-5" target="_blank">Terms</a>
                                <a href="../../demo13/dist/pages/pricing/column.html" class="px-5" target="_blank">Plans</a>
                                <a href="../../demo13/dist/pages/contact.html" class="px-5" target="_blank">Contact Us</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Body-->
                </div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
@endsection