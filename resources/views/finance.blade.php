@extends('layouts.app')
@section('title','PT Indo Greenlife Harvest Dashboard')
@section('content')
    <!--begin::Wrapper-->
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
                            <li class="breadcrumb-item text-white fw-bold lh-1">
                                <a href="{{url('/')}}" class="text-white text-hover-primary">
                                    <i class="ki-outline ki-home text-white fs-3"></i>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-white fw-bold lh-1">Dashboards</li>
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
                            <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">Dashboard
                            <!--begin::Description-->
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">Welcome back, {{Auth::user()->name}}</span>
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
                        <!--begin::Row-->
                        <div class="row gy-5 gx-xl-10">
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-2 mb-xl-10">
                                <!--begin::Card widget 2-->
                                <div class="card h-lg-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                        <!--begin::Icon-->
                                        <div class="m-0">
                                            <i class="ki-outline ki-compass fs-2hx text-gray-600"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-column my-7">
                                            <!--begin::Number-->
                                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
                                            <!--end::Number-->
                                            <!--begin::Follower-->
                                            <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-500">Projects</span>
                                            </div>
                                            <!--end::Follower-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-2 mb-xl-10">
                                <!--begin::Card widget 2-->
                                <div class="card h-lg-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                        <!--begin::Icon-->
                                        <div class="m-0">
                                            <i class="ki-outline ki-chart-simple fs-2hx text-gray-600"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-column my-7">
                                            <!--begin::Number-->
                                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">27,5M</span>
                                            <!--end::Number-->
                                            <!--begin::Follower-->
                                            <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-500">Stock Qty</span>
                                            </div>
                                            <!--end::Follower-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-2 mb-xl-10">
                                <!--begin::Card widget 2-->
                                <div class="card h-lg-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                        <!--begin::Icon-->
                                        <div class="m-0">
                                            <i class="ki-outline ki-abstract-39 fs-2hx text-gray-600"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-column my-7">
                                            <!--begin::Number-->
                                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">149M</span>
                                            <!--end::Number-->
                                            <!--begin::Follower-->
                                            <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-500">Stock Value</span>
                                            </div>
                                            <!--end::Follower-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-danger fs-base">
                                        <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.47%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-2 mb-xl-10">
                                <!--begin::Card widget 2-->
                                <div class="card h-lg-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                        <!--begin::Icon-->
                                        <div class="m-0">
                                            <i class="ki-outline ki-map fs-2hx text-gray-600"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-column my-7">
                                            <!--begin::Number-->
                                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">89M</span>
                                            <!--end::Number-->
                                            <!--begin::Follower-->
                                            <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-500">C APEX</span>
                                            </div>
                                            <!--end::Follower-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                                <!--begin::Card widget 2-->
                                <div class="card h-lg-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                        <!--begin::Icon-->
                                        <div class="m-0">
                                            <i class="ki-outline ki-abstract-35 fs-2hx text-gray-600"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-column my-7">
                                            <!--begin::Number-->
                                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">72.4%</span>
                                            <!--end::Number-->
                                            <!--begin::Follower-->
                                            <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-500">OPEX</span>
                                            </div>
                                            <!--end::Follower-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-danger fs-base">
                                        <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.647%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                                <!--begin::Card widget 2-->
                                <div class="card h-lg-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                        <!--begin::Icon-->
                                        <div class="m-0">
                                            <i class="ki-outline ki-abstract-26 fs-2hx text-gray-600"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-column my-7">
                                            <!--begin::Number-->
                                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">106M</span>
                                            <!--end::Number-->
                                            <!--begin::Follower-->
                                            <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-500">Saving</span>
                                            </div>
                                            <!--end::Follower-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card widget 2-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4">
                                <!--begin::Chart widget 19-->
                                <div class="card card-flush h-100 mb-5 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Leading Companies</span>
                                            <span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Nav-->
                                            <ul class="nav" id="kt_chart_widget_19_tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_19_tab_1" href="#kt_chart_widget_19_tab_content_1" aria-selected="true" role="tab">2024</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4" data-bs-toggle="tab" id="kt_chart_widget_19_tab_2" href="#kt_chart_widget_19_tab_content_2" aria-selected="false" role="tab" tabindex="-1">Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Tab Content (ishlamayabdi)-->
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade active show" id="kt_chart_widget_19_tab_content_1" role="tabpanel" aria-labelledby="kt_chart_widget_19_tab_1">
                                                <!--begin::Chart container-->
                                                <div id="kt_charts_widget_19_chart_1" class="w-100 h-400px mb-13 mt-n4"> </div>
                                                <!--end::Chart container-->
                                                <!--begin::Items-->
                                                <div class="m-0">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/atica.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/telegram-2.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/balloon.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/kickstarter.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/vimeo.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/plurk.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_chart_widget_19_tab_content_2" role="tabpanel" aria-labelledby="kt_chart_widget_19_tab_2">
                                                <!--begin::Chart container-->
                                                <div id="kt_charts_widget_19_chart_2" class="w-100 h-400px mb-13 mt-n4"> </div>
                                                <!--end::Chart container-->
                                                <!--begin::Items-->
                                                <div class="m-0">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/atica.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/telegram-2.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/balloon.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/kickstarter.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/vimeo.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-4"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/media/svg/brand-logos/plurk.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                                            <!--end::Number-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Chart widget 19-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-8 mb-xl-10">
                                <!--begin::Chart widget 38-->
                                <div class="card card-flush h-xl-50 mb-5 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">LOI Issued by Departments</span>
                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Counted in Millions</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                                <!--begin::Display range-->
                                                <div class="text-gray-600 fw-bold">17 May 2024 - 17 May 2024</div>
                                                <!--end::Display range-->
                                                <i class="ki-outline ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"></i>
                                            </div>
                                            <!--end::Daterangepicker-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_38_chart" class="h-325px w-100 min-h-auto ps-4 pe-6" style="min-height: 340px;"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end: Card Body-->
                                </div>
                                <!--end::Chart widget 38-->
                                <!--begin::Chart widget 20-->
                                <div class="card card-flush h-xl-50">
                                    <!--begin::Header-->
                                    <div class="card-header py-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                                <!--begin::Display range-->
                                                <div class="text-gray-600 fw-bold">19 Apr 2024 - 18 May 2024</div>
                                                <!--end::Display range-->
                                                <i class="ki-outline ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"></i>
                                            </div>
                                            <!--end::Daterangepicker-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
                                        <!--begin::Items-->
                                        <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                                            <!--begin::Item-->
                                            <div class="me-md-2">
                                                <!--begin::Statistics-->
                                                <div class="d-flex mb-2">
                                                    <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-500">Targets for April</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                                                <!--begin::Statistics-->
                                                <div class="d-flex mb-2">
                                                    <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="m-0">
                                                <!--begin::Statistics-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Currency-->
                                                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                                    <!--end::Currency-->
                                                    <!--begin::Value-->
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                                                    <!--end::Value-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-outline ki-black-up fs-7 text-success ms-n1"></i>4.5%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-500">GAP</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px; min-height: 315px;"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 20-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->


                    </div>
                </div>
                <!--end::Content wrapper-->
               @include('layouts.footer')
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper container-->
    </div>
    <!--end::Wrapper-->
@endsection
@section('js')
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
@endsection
