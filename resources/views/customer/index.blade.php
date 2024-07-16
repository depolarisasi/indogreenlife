@extends('layouts.app')
@section('title','Customer - PT Indo Greenlife Harvest ')
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
                        <li class="breadcrumb-item fw-bold lh-1">
                            <a href="{{url('/')}}" class="text-hover-primary>
                                <i class="ki-outline ki-home fs-3"></i>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item fw-bold lh-1">Customer</li>
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
                        <h1 class="page-heading d-flex fw-bolder fs-2 flex-column justify-content-center my-0">Customer
                        <!--begin::Description-->
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
                        <!--begin::Card-->
                        @if(count($customer) == 0)
                            <div class="card-px text-center py-20 my-10">
            <!--begin::Title-->
            <h2 class="fs-2x fw-bold mb-10">Customer</h2>
            <!--end::Title-->

            <!--begin::Description-->
            <p class="text-gray-500 fs-4 fw-semibold mb-10">
                Belum Ada Customer.<br>
                Silahkan Lakukan Penambahan Customer
            </p>
            <!--end::Description-->

            <!--begin::Action-->
            <a href="{{url('customer/new')}}" class="btn btn-primary" >Add Customer</a>
            <!--end::Action-->
        </div>
            @else
                        <div class="card">

                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search customer" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                        <!--begin::Filter-->
                                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-filter fs-2"></i>Filter</button>
                                        <!--begin::Menu 1-->
                                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Separator-->
                                            <!--begin::Content-->
                                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <label class="form-label fs-6 fw-semibold">Type Customer:</label>
                                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="type" data-hide-search="true">
                                                        <option></option>
                                                        <option value="Perusahaan">Perusahaan</option>
                                                        <option value="Perorangan">Perorangan</option>
                                                    </select>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <label class="form-label fs-6 fw-semibold">Sales:</label>
                                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="sales" data-hide-search="true">
                                                        <option></option>
                                                        @foreach($user as $u)
                                                        <option value="{{$u->name}}">{{$u->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                                    <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Filter-->
                                        <!--begin::Export-->
                                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                                        <i class="ki-outline ki-exit-up fs-2"></i> Export</button>
                                        <!--end::Export-->
                                        <!--begin::Add user-->
                                        <a href="{{url('customer/new')}}" class="btn btn-primary">
                                        <i class="ki-outline ki-plus fs-2"></i>Tambah Customer</a>
                                        <!--end::Add user-->
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::Modal - Adjust Balance-->
                                    <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bold">Export Customer</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                        <i class="ki-outline ki-cross fs-1"></i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                    <!--begin::Form-->
                                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mb-2">Customer Type:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                        <option value="Perusahaan">Perusahaan</option>
                                                        <option value="Perorangan">Perorangan</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                          <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mb-2">Sales:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                        @foreach($user as $u)
                                                        <option value="{{$u->name}}">{{$u->name}}</option>
                                                        @endforeach
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                <option></option>
                                                                <option value="excel">Excel</option>
                                                                <option value="pdf">PDF</option>
                                                                <option value="csv">CSV</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center">
                                                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                <span class="indicator-label">Submit</span>
                                                                <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - New Card-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4">
                                <!--begin::Table-->
                                <div class="table-responsive">

                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-125px">Company</th>
                                            <th class="min-w-125px">Personal</th>
                                            <th>Type</th>
                                            <th>Sales</th>
                                            <th>Date Added</th>
                                            <th>Detail</th>
                                            <th class="text-end min-w-100px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">
                                        @foreach($customer as $c)
                                        <tr>
                                            <td class="d-flex align-items-center">

                                                <!--begin::User details-->
                                                <div class="d-flex flex-column">
                                                    <a href="{{url('customer/detail/'.$c->customer_uniqueid)}}">{{$c->customer_company}}</a>
                                                    <span>{{$c->customer_companytelp}}</span>
                                                    <span>{{$c->customer_companyemail}}</span>
                                                    <span>{{$c->customer_companyaddress}}</span>
                                                    <span>@if($c->customer_companynib != NULL)
                                                        NIB {{$c->customer_companynib}}
                                                    @endif</span>
                                                    <span>@if($c->customer_companynpwp != NULL)
                                                        NPWP {{$c->customer_companynpwp}}
                                                        @endif
                                                        @if($c->customer_companytax == "PKP")
                                                        <span class="badge badge-info fw-bold">PKP</span>
                                                    @elseif($c->customer_companytax == "NON PKP")
                                                    <span class="badge badge-info fw-bold">NON PKP</span>
                                                @endif</span>
                                                </div>
                                                <!--begin::User details-->
                                            </td>
                                            <td>
                                                <!--begin::User details-->
                                                <div class="d-flex flex-column">
                                                   <a href="{{url('customer/detail/'.$c->customer_uniqueid)}}">{{$c->customer_name}}</a> ({{$c->customer_uniqueid}})
                                                    <span>{{$c->customer_nohp}}</span>
                                                    <span>{{$c->customer_email}}</span>
                                                    <span>{{$c->customer_address}}</span>
                                                    <span>@if($c->customer_npwp != NULL)
                                                        NPWP {{$c->customer_npwp}} @endif</span>
                                                </div>
                                                <!--begin::User details-->
                                            </td>
                                            <td>@if($c->customer_type == "Perusahaan" )
                                                <span class="badge badge-info fw-bold">Perusahaan</span>
                                            @elseif($c->customer_type == "Perorangan")
                                            <span class="badge badge-primary fw-bold">Perorangan</span>
                                            @endif
                                        </td>
                                            <td>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="{{$c->name}}" data-bs-original-title="{{$c->name}}" data-kt-initialized="1">
                                                <img alt="Pic" src="{{$c->foto}}">
                                            </div><br>
                                            <a href="{{url('user/detail/'.$c->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$c->name}}</a></td>
                                            <td>{{\Carbon\Carbon::parse($c->customer_dateadded)->format('d M Y H:i')}}</td>
                                            <td>
                                                <a href="{{url('customer/detail/')}}" class="btn btn-xs btn-primary"><i class="bi bi-info-circle"></i> Product</a>
                                                <a href="{{url('customer/edit/')}}" class="btn btn-xs btn-warning"><i class="bi bi-info-circle"></i> Request Sample</a>
                                                <a href="{{url('customer/edit/')}}" class="btn btn-xs btn-danger"><i class="bi bi-info-circle"></i> Sales Order</a>
                                           </td>
                                           <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{url('customer/detail/'.$c->customer_uniqueid)}}" class="menu-link px-3">Detail</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{url('customer/edit/'.$c->customer_uniqueid)}}" class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{url('customer/delete/'.$c->customer_uniqueid)}}" class="menu-link px-3">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                            @endif
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->

            </div>
            <!--end:::Main-->
            @include('layouts.footer')
        </div>
        <!--end::Wrapper container-->
</div>
@endsection
@section('js')
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/customer/table.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
@endsection
