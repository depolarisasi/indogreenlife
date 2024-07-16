@extends('layouts.app')
@section('title','Product - PT Indo Greenlife Harvest ')
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
                            <a href="{{url('/')}}" class="text-hover-primary">
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
                        <li class="breadcrumb-item fw-bold lh-1">Product</li>
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
                        <h1 class="page-heading d-flex fw-bolder fs-2 flex-column justify-content-center my-0">Product
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
                                                    <label class="form-label fs-6 fw-semibold">Type Product:</label>
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
                                                        <option value="Perusahaan">Perusahaan</option>
                                                        <option value="Perorangan">Perorangan</option>

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

                                        <!--begin::Add user-->
                                        <a href="{{url('product/new')}}" class="btn btn-primary">
                                        <i class="ki-outline ki-plus fs-2"></i>Tambah Product</a>
                                        <!--end::Add user-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4">
                                <!--begin::Table-->
                                <div class="table-responsive">

                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_product">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-125px">Nama</th>
                                            <th class="min-w-125px">Nama BPOM</th>
                                            <th>Size Per Sachet</th>
                                            <th>Serving Size</th>
                                            <th>Sample</th>
                                            <th>Final Sample</th>
                                            <th>Customer</th>
                                            <th>Dibuat Tanggal</th>
                                            <th class="text-end min-w-100px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">

                                        <tr>
                                            <td><a href="{{url('product/detail')}}">Minuman Serbuk Pelangsing Alamiah Herbal Milluner</a></td>
                                            <td>Minuman Serbuk Pelangsing Alamiah Herbal Milluner</td>
                                            <td>25,00</td>
                                            <td>25,00</td>
                                            <td>
                                                <span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
                                            </td>
                                            <td>
                                                <span><i class="ki-outline ki-cross-circle fs-3 text-danger"></i></span>
                                            </td>
                                            <td><a href="#">John Connor (PT Infinix Sehat Sejati)</a></td>
                                            <td>{{\Carbon\Carbon::now()->format('d M Y H:i')}}</td>
                                           <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{url('product/detail')}}" class="menu-link px-3">Detail</a>
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
                                            <td><a href="{{url('product/detail')}}">Black Coffee Tubruk Gadjah</a></td>
                                            <td>Black Coffee Tubruk Gadjah</td>
                                            <td>25,00</td>
                                            <td>25,00</td>
                                            <td>
                                                <span><i class="ki-outline ki-double-check-circle fs-3 text-success"></i></span>
                                            </td>
                                            <td>
                                                <span><i class="ki-outline ki-cross-circle fs-3 text-danger"></i></span>
                                            </td>
                                            <td><a href="#">John Connor (PT Infinix Sehat Sejati)</a></td>
                                            <td>{{\Carbon\Carbon::now()->format('d M Y H:i')}}</td>
                                           <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{url('product/detail')}}" class="menu-link px-3">Detail</a>
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
                                </table>
                                <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
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
		<script>
            var KTUsersList = function() {
                var e, t, n, r, o = document.getElementById("table_product")

                return {
                    init: function() {
                        o && (o.querySelectorAll("tbody tr").forEach((e => {
                            const t = e.querySelectorAll("td")

                        })), (e = $(o).DataTable({
                            dom : '<"d-flex align-items-center justify-content-between"Bl>rt<"bottom"ip><"clear">',
                            info: !1,
                            buttons: [
                                {
                                    extend: 'excelHtml5',
                                    exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                                    }
                                },
                                {
                                    extend: 'pdfHtml5',
                                    exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                                    }
                                },
                                {
                                    extend: 'csvHtml5',
                                    exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                                    }
                                },
                            ],
                            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                            columnDefs: [
                            {
                                searchable: false,
                                orderable: false,
                                targets: 8
                            }],
                            order: [[0, 'asc']]
                        })).on("draw", (function() {
                        })),  document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                            e.search(t.target.value).draw()
                        })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                            document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select").forEach((e => {
                                $(e).val("").trigger("change")
                            })), e.search("").draw()
                        })), (() => {
                            const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                                n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                                r = t.querySelectorAll("select");
                            n.addEventListener("click", (function() {
                                var t = "";
                                r.forEach(((e, n) => {
                                    e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                                })), e.search(t).draw()
                            }))
                        })())
                    }
                }
            }();
            KTUtil.onDOMContentLoaded((function() {
                KTUsersList.init()
            }));
            </script>
		<script src="{{asset('assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
@endsection
