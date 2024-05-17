@extends('layouts.authentication')
@section('title','Log In - PT Indo Greenlife Harvest')
@section('content')
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url({{asset('assets/media/green-background.jpg')}}); } [data-bs-theme="dark"] body { background-image: url(({{asset('assets/media/green-background.jpg')}}); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="index.html" class="mb-7">
							<img alt="Logo" src="{{asset('assets/media/igh-logo-white.png')}}" class="img-fluid" style="width: 50%;" />
						</a>
						<!--end::Logo-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
							<form class="form w-100" id="kt_sign_in_form"  method="POST"  action="{{ route('register') }}">
                                    @csrf
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Log In</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">
                                        PT Indo Greenlife Harvest Enterprise Manufactuing System
                                    </div>
									<!--end::Title-->
								</div>
								<!--begin::Heading-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Name" name="name" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
                  <div class="fv-row mb-8">
                    <input class="form-control" name="password" id="registerPassword" type="password" placeholder="Password" required>
                  </div>

								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="{{url('forgot-password')}}" class="link-primary">Lupa Password</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<span class="indicator-label">Log In</span>
									</button>
								</div>
								<!--end::Submit button-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
@endsection
