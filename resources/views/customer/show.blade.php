@extends('layouts.app')
@section('title','Detail User - PT Indo Greenlife Harvest ')
@section('content')
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
            <!--begin::Toolbar container-->
            <div class="d-flex flex-column flex-row-fluid">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-center pt-1">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                        <!--begin::Item-->
                        <li class="breadcrumb-item  fw-bold lh-1">
                            <a href="{{url('/')}}" class=" text-hover-primary">
                                <i class="ki-outline ki-home  fs-3"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item  fw-bold lh-1">
                            <a href="{{url('customer')}}" class=" text-hover-primary">
                                Customer
                            </a>
                        </li>

                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item  fw-bold lh-1">Detail Customer</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Toolbar wrapper=-->
                <!--begin::Toolbar wrapper=-->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Detail Customer
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">Detail Customer {{$show->customer_name}} ({{$show->customer_uniqueid}})</span>
                        <!--end::Description--></h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Toolbar wrapper=-->
            </div>
            <!--end::Toolbar container=-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Wrapper container-->
    <div class="app-container container-xxl">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_content" class="app-content">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                            <!--begin::Card-->
                            <div class="card mb-5 mb-xl-8">
                                <!--begin::Card body-->
                                <div class="card-body">
                                    <!--begin::Summary-->
                                    <!--begin::User Info-->
                                    <div class="d-flex flex-center flex-column py-5">
                                        <!--begin::Avatar-->
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{$show->customer_name}}</a>
                                        <!--end::Name-->
                                        <!--begin::Position-->
                                        <div class="mb-9">
                                            <!--begin::Badge-->
                                            <div class="badge badge-lg badge-light-primary d-inline">{{$show->customer_company}}</div>
                                            <!--begin::Badge-->
                                        </div>
                                        <!--end::Position-->
                                        <!--begin::Info-->
                                        <!--begin::Info heading-->
                                        <div class="fw-bold mb-3">Customer Data
                                        <span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week.">
                                            <i class="ki-outline ki-information fs-7"></i>
                                        </span></div>
                                        <!--end::Info heading-->
                                        <div class="d-flex flex-wrap flex-center">
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-75px">243</span>
                                                    <i class="ki-outline ki-arrow-up fs-3 text-success"></i>
                                                </div>
                                                <div class="fw-semibold text-muted">Product</div>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">56</span>
                                                    <i class="ki-outline ki-arrow-down fs-3 text-danger"></i>
                                                </div>
                                                <div class="fw-semibold text-muted">Sample</div>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">188</span>
                                                    <i class="ki-outline ki-arrow-up fs-3 text-success"></i>
                                                </div>
                                                <div class="fw-semibold text-muted">Sales Order</div>
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User Info-->
                                    <!--end::Summary-->
                                    <!--begin::Details toggle-->
                                    <div class="d-flex flex-stack fs-4 py-3">
                                        <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Customer Detail
                                        <span class="ms-2 rotate-180">
                                            <i class="ki-outline ki-down fs-3"></i>
                                        </span></div>

                                    </div>
                                    <!--end::Details toggle-->
                                    <div class="separator"></div>
                                    <!--begin::Details content-->
                                    <div id="kt_user_view_details" class="collapse show">
                                        <div class="pb-5 fs-6">
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Account ID</div>
                                            <div class="text-gray-600">{{$show->customer_uniqueid}}</div>
                                            <!--begin::Details item-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Email</div>
                                            <div class="text-gray-600">
                                                <a href="#" class="text-gray-600 text-hover-primary">{{$show->customer_email}}</a>
                                            </div>
                                            <!--begin::Details item-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Alamat</div>
                                            <div class="text-gray-600">{{$show->customer_address}}</div>
                                            <!--begin::Details item-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Nomor Telepon</div>
                                            <div class="text-gray-600">{{$show->customer_nohp}}</div>
                                            <!--begin::Details item-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">NPWP</div>
                                            <div class="text-gray-600">{{$show->customer_npwp}}</div>
                                            <!--begin::Details item-->
                                        </div>
                                    </div>
                                    <!--end::Details content-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Connected Accounts-->
                            <div class="card mb-5 mb-xl-8">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <div class="card-title">
                                        <h3 class="fw-bold m-0">Company Detail</h3>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="pb-5 fs-6">
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Company Name</div>
                                        <div class="text-gray-600">{{$show->customer_company}}</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Email</div>
                                        <div class="text-gray-600">
                                            <a href="#" class="text-gray-600 text-hover-primary">{{$show->customer_companyemail}}</a>
                                        </div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Nomor Telepon</div>
                                        <div class="text-gray-600">{{$show->customer_companytelp}}</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Alamat</div>
                                        <div class="text-gray-600">{{$show->customer_companyaddress}}</div>
                                        <!--begin::Details item-->
                                        @if($show->customer_companyaddress2 != NULL)<!--begin::Details item-->
                                        <div class="fw-bold mt-5">Alamat Alternatif</div>
                                        <div class="text-gray-600">{{$show->customer_companyaddress2}}</div>
                                        <!--begin::Details item-->
                                        @endif
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">NPWP</div>
                                        <div class="text-gray-600">{{$show->customer_companynpwp}} @if($show->customer_companytax == "PKP")
                                            <span class="badge badge-info fw-bold">PKP</span>
                                        @elseif($show->customer_companytax == "NON PKP")
                                        <span class="badge badge-info fw-bold">NON PKP</span>
                                    @endif</div>
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">NIB</div>
                                        <div class="text-gray-600">{{$show->customer_companynib}}</div>
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">HAKI</div>
                                        <div class="text-gray-600">{{$show->customer_companyhaki}}</div>
                                        <!--begin::Details item-->
                                    </div>
                                </div>
                                <!--end::Card body-->

                            </div>
                            <!--end::Connected Accounts-->
                        </div>
                        <!--end::Sidebar-->
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid ms-lg-15">
                            <!--begin:::Tabs-->
                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
                                <!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#product_tab" aria-selected="true" role="tab">Product</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#sample_tab" data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Sample</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#sales_order_tab" aria-selected="false" tabindex="-1" role="tab">Sales Order</a>
                                </li>
                                <!--end:::Tab item--><!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#logs_tab" aria-selected="false" tabindex="-1" role="tab">Log</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item ms-auto">
                                    <!--begin::Action menu-->
                                    <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Aksi
                                    <i class="ki-outline ki-down fs-2 me-0"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="#" class="menu-link px-5">Buat Product</a>
                                        </div>
                                        <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-5">
                                            <a href="#" class="menu-link px-5">Buat Sample</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="#" class="menu-link px-5">Buat Sales Order</a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-3"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="#" class="menu-link px-5">Ubah Customer Account</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="#" class="menu-link text-danger px-5">Delete Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu-->
                                </li>
                                <!--end:::Tab item-->
                            </ul>
                            <!--end:::Tabs-->
                            <!--begin:::Tab content-->
                            <div class="tab-content" id="myTabContent">
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade show active" id="product_tab" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card card-flush mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header mt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title flex-column">
                                                <h2 class="mb-1"> Product</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                                <i class="ki-outline ki-brush fs-3"></i> Tambah Product</button>
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body p-9 pt-4">
                                            <div class="table-responsive">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted bg-light">
															<th class="min-w-125px">Product</th>
															<th>Size Per Sachet (Gr)</th>
															<th>Sample</th>
															<th>Final Sample</th>
															<th class="min-w-125px"> Aksi</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant Extreanet Solution</a>
																		<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">500</a>
															</td>
															<td>
																<span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
															</td>
															<td>
																<span><i class="ki-outline ki-check-circle fs-3 text-success"></i></span>
															</td>

															<td>
																<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
                                                        <tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant Extreanet Solution</a>
																		<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">500</a>
															</td>
															<td>
																<span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
															</td>
															<td>
																<span><i class="ki-outline ki-cross-square fs-3 text-danger"></i></span>
															</td>

															<td>
                                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
                                                        <tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant Extreanet Solution</a>
																		<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">500</a>
															</td>
															<td>
																<span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
															</td>
															<td>
																<span><i class="ki-outline ki-cross-square fs-3 text-danger"></i></span>
															</td>

															<td>
                                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
                                                        <tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant Extreanet Solution</a>
																		<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">500</a>
															</td>
															<td>
																<span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
															</td>
															<td>
																<span><i class="ki-outline ki-cross-square fs-3 text-danger"></i></span>
															</td>

															<td>
                                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
                                                        <tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant Extreanet Solution</a>
																		<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">500</a>
															</td>
															<td>
																<span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
															</td>
															<td>
																<span><i class="ki-outline ki-cross-square fs-3 text-danger"></i></span>
															</td>

															<td>
                                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="sample_tab" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2> Sample</h2>
                                            </div>
                                            <!--end::Card title-->
                                             <!--begin::Card toolbar-->
                                             <div class="card-toolbar">
                                                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                                <i class="ki-outline ki-brush fs-3"></i> Tambah Sample</button>
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 pb-5">
                                            <div class="table-responsive">
												<!--begin::Table-->
												<table class="table gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted bg-light">
															<th>Kode</th>
															<th class="min-w-125px">Sample/Product</th>
															<th>Qty</th>
															<th>Status</th>
															<th>Dibuat Oleh</th>
															<th> Aksi</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">IGH06711</a>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Man Stamina Power</a> <span class="badge badge-success fw-bold">Berbayar</span>
															</td>
															<td>
																<span>1000</span>
															</td>
                                                            <td>
                                                                <span class="badge badge-warning fw-bold">Draft</span>
															</td>
                                                            <td>
                                                                {{Auth::user()->name}}
															</td>
															<td>
																<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
                                                        <tr>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">IGH06711</a>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Coffee Power</a>
															</td>
															<td>
																<span>1000</span>
															</td>
                                                            <td>
                                                                <span class="badge badge-warning fw-bold">Draft</span>
															</td>
                                                            <td>
                                                                {{Auth::user()->name}}
															</td>
															<td>
																<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="sales_order_tab" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Sales Order</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Filter-->
                                                <button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
                                                <i class="ki-outline ki-entrance-right fs-3"></i>Tambah Sales Order</button>
                                                <!--end::Filter-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 pb-5">
                                            	<!--begin::Table-->
												<table class="table gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted bg-light">
															<th>Nomor PO</th>
															<th>Tanggal PO</th>
															<th>Due Date PO</th>
															<th>NC / E</th>
															<th>Dibuat Oleh</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">0002/LOLO/IV/2023</a>
															</td>
															<td>
																2023-04-11
															</td>
															<td>
																<span>2023-08-11</span>
															</td>
                                                            <td>
                                                                <span class="badge badge-success fw-bold">Selesai</span>
															</td>
                                                            <td>
                                                                {{Auth::user()->name}}
															</td>
															<td>
																<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
                                                        <tr>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">0002/YEYE/IV/2023</a>
															</td>
															<td>
																2023-04-11
															</td>
															<td>
																<span>2023-08-11</span>
															</td>
                                                            <td>
                                                                <span class="badge badge-warning fw-bold">On Progress</span>
															</td>
                                                            <td>
                                                                {{Auth::user()->name}}
															</td>
															<td>
																<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Detail</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Edit</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->
                                 <!--begin:::Tab pane-->
                                 <div class="tab-pane fade" id="logs_tab" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card card-flush mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header mt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title flex-column">
                                                <h2 class="mb-1"> Log</h2>
                                            </div>
                                            <!--end::Card title-->

                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                                <tbody>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                                        <span class="badge badge-light-succees me-1">In Transit</span>to
                                                        <span class="badge badge-light-success">Approved</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2024, 11:05</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                                        <span class="badge badge-light-danger">Declined</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2024, 10:30</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                                        <span class="badge badge-light-info">In Progress</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2024, 8:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2024, 11:05</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2024, 11:30</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                                        <span class="badge badge-light-info">In Progress</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2024, 2:40</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
                                                        <span class="badge badge-light-info me-1">In Progress</span>to
                                                        <span class="badge badge-light-primary">In Transit</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2024, 6:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                                        <span class="badge badge-light-danger">Declined</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2024, 11:30</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2024, 6:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
                                                        <span class="badge badge-light-info me-1">In Progress</span>to
                                                        <span class="badge badge-light-primary">In Transit</span></td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2024, 6:05</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->
                            </div>
                            <!--end:::Tab content-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
            </div>
            <!--end::Content wrapper-->
           @include('layouts.footer')
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper container-->
</div>
@endsection
@section('js')
<script>
   var table = $("#userlist").DataTable({

    dom : '<"d-flex align-items-center position-relative mt-3"fl>rt<"bottom"ip><"clear">',
    language: { search: '', searchPlaceholder: "Cari User" },


        "paging":   true,
        "ordering": true,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
           });

           $(".deletebtn").on('click', function(event){
    event.stopPropagation();
    event.stopImmediatePropagation();
    var href = $(this).attr('href');
           Swal.fire({
       title: 'Yakin untuk menghapus data ini ? ',
       text: 'Data ini akan dihapus dan tidak dapat dikembalikan!',
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#95000c',
       confirmButtonText: 'Ya, Hapus!',
       cancelButtonText: 'Tidak, batalkan'
     }).then((result) => {
       if (result.value) {
          window.location.href = href;

       //  For more information about handling dismissals please visit
       // https://sweetalert2.github.io/#handling-dismissals
       } else if (result.dismiss === Swal.DismissReason.cancel) {
         Swal.fire(
           'Dibatalkan',
           'Data tidak jadi dihapus',
           'error'
         )
       }
     });

});
    </script>
@endsection
