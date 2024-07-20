@extends('layouts.app-customer')
@section('title','Customer Dashboard - PT Indo Greenlife Harvest Dashboard')
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
                            <li class="breadcrumb-item fw-bold lh-1">
                                <a href="{{url('/')}}" class="text-hover-primary">
                                    <i class="ki-outline ki-home fs-3"></i>
                                </a>
                            </li>
                            <!--end::Item--> 
                            <!--begin::Item-->
                            <li class="breadcrumb-item fw-bold lh-1">Customer Dashboards</li>
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
                            <h1 class="page-heading d-flex fw-bolder fs-2 flex-column justify-content-center my-0">Dashboard
                            <!--begin::Description-->
                            <span class="page-desc opacity-50 fs-6 fw-bold pt-4">Welcome, Jaya Sentosa (PT Kalingga Food Industry)</span>
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
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content">
                    <div class="row g-6 g-xl-9">
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4"> 
<!--begin::Card-->
<a href="{{url('customer-portal/detail-po')}}" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-5"> 

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body pt-3 p-9">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900">
            PO No : PO/IGH/VXI/1232</div>
        <!--end::Name-->

        <!--begin::Description-->
        <div class="mt-2 mb-5">
        <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Coffee Mass Gainer 900gr</p>
          <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Coffee Creatine 100gr</p>
          <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Mass Gainer Muscle Farming 900gr</p>
        </div>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">            
                <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2024</div>
                <div class="fw-semibold text-gray-500">PO Date</div>
            </div>
            <!--end::Due-->

           <!--begin::Due-->
           <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">            
                <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2024</div>
                <div class="fw-semibold text-gray-500">Due Date</div>
            </div>
            <!--end::Due-->
        </div>
        <!--end::Info-->

         <!--begin::Description-->
         <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
           Progress PO : On Production 68%</p>
        <!--end::Description-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 50% completed" data-bs-original-title="This project 50% completed" data-kt-initialized="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 68%" aria-valuenow=" 50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        

            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->
      <!--begin::Col-->
      <div class="col-md-6 col-xl-4"> 
<!--begin::Card-->
<a href="{{url('customer-portal/detail-po')}}" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-5"> 

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body pt-3 p-9">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900">
            PO No : PO/IGH/VXI/1232</div>
        <!--end::Name-->

        <!--begin::Description-->
        <div class="mt-2 mb-5">
        <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Coffee Mass Gainer 900gr</p>
          <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Coffee Creatine 100gr</p>
          <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Mass Gainer Muscle Farming 900gr</p>
        </div>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">            
                <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2024</div>
                <div class="fw-semibold text-gray-500">PO Date</div>
            </div>
            <!--end::Due-->

           <!--begin::Due-->
           <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">            
                <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2024</div>
                <div class="fw-semibold text-gray-500">Due Date</div>
            </div>
            <!--end::Due-->
        </div>
        <!--end::Info-->

         <!--begin::Description-->
         <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
           Progress PO : On Production 68%</p>
        <!--end::Description-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 50% completed" data-bs-original-title="This project 50% completed" data-kt-initialized="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 68%" aria-valuenow=" 50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        

            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->
      <!--begin::Col-->
      <div class="col-md-6 col-xl-4"> 
<!--begin::Card-->
<a href="{{url('customer-portal/detail-po')}}" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-5"> 

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body pt-3 p-9">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900">
            PO No : PO/IGH/VXI/1232</div>
        <!--end::Name-->

        <!--begin::Description-->
        <div class="mt-2 mb-5">
        <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Coffee Mass Gainer 900gr</p>
          <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Coffee Creatine 100gr</p>
          <p class="text-gray-500 fw-semibold fs-9">
          - Millionaire Mass Gainer Muscle Farming 900gr</p>
        </div>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">            
                <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2024</div>
                <div class="fw-semibold text-gray-500">PO Date</div>
            </div>
            <!--end::Due-->

           <!--begin::Due-->
           <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">            
                <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2024</div>
                <div class="fw-semibold text-gray-500">Due Date</div>
            </div>
            <!--end::Due-->
        </div>
        <!--end::Info-->

         <!--begin::Description-->
         <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
           Progress PO : On Production 68%</p>
        <!--end::Description-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 50% completed" data-bs-original-title="This project 50% completed" data-kt-initialized="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 68%" aria-valuenow=" 50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        

            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    
</div>

                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
               @include('layouts.footer-customer')
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
