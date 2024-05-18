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
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content">
                        <!--begin::Row-->
                        <div class="row gx-5 gx-xl-10 mb-xl-10">
                            <!--begin::Col-->
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-10">
                                <!--begin::Card widget 4-->
                                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Currency-->
                                                <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">Rp</span>
                                                <!--end::Currency-->
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">5 M</span>
                                                <!--end::Amount-->
                                                <!--begin::Badge-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.2%</span>
                                                <!--end::Badge-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">May Expected Earnings</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                        <!--begin::Chart-->
                                        <div class="d-flex flex-center me-5 pt-2">
                                            <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Labels-->
                                        <div class="d-flex flex-column content-justify-center w-100">
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-500 flex-grow-1 me-4">Done</div>
                                                <!--end::Label-->
                                                <!--begin::Stats-->
                                                <div class="fw-bolder text-gray-700 text-xxl-end">Rp 1M</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-500 flex-grow-1 me-4">Progress</div>
                                                <!--end::Label-->
                                                <!--begin::Stats-->
                                                <div class="fw-bolder text-gray-700 text-xxl-end">Rp 242 Jt</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-500 flex-grow-1 me-4">Pending</div>
                                                <!--end::Label-->
                                                <!--begin::Stats-->
                                                <div class="fw-bolder text-gray-700 text-xxl-end">Rp 3.8M</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Labels-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 4-->
                                <div class="card card-flush h-md-50 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">6.3k</span>
                                            <!--end::Amount-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">New Customers This Month</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Top Performing Marketer</span>
                                        <!--end::Title-->
                                        <!--begin::Users group-->
                                        <div class="symbol-group symbol-hover flex-nowrap">
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                <img alt="Pic" src="{{asset('assets/media/avatars/300-11.jpg')}}" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                <img alt="Pic" src="{{asset('assets/media/avatars/300-2.jpg')}}" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                <img alt="Pic" src="{{asset('assets/media/avatars/300-12.jpg')}}" />
                                            </div>
                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                            </a>
                                        </div>
                                        <!--end::Users group-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6 col-xl-6 col-xxl-6 mb-5 mb-xl-0">
                                <!--begin::Chart widget 3-->
                                <div class="card card-flush overflow-hidden h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header py-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Sales This Months</span>
                                        </h3>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                        <!--begin::Statistics-->
                                        <div class="px-9 mb-5">
                                            <!--begin::Statistics-->
                                            <div class="d-flex mb-2">
                                                <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-semibold text-gray-500">Another $48,346 to Goal</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 3-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-xl-10">
                                <!--begin::Table widget 2-->
                                <div class="card card-flush h-md-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Stock Report</span>
                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Cateogry</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="a">Category A</option>
                                                        <option value="b">Category B</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="In Stock">In Stock</option>
                                                        <option value="Out of Stock">Out of Stock</option>
                                                        <option value="Low Stock">Low Stock</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <a href="apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-150px">Item</th>
                                                    <th class="text-end pe-3 min-w-100px">Product ID</th>
                                                    <th class="text-end pe-3 min-w-150px">Date Added</th>
                                                    <th class="text-end pe-3 min-w-100px">Price</th>
                                                    <th class="text-end pe-3 min-w-100px">Status</th>
                                                    <th class="text-end pe-0 min-w-75px">Qty</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XGY-356</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">02 Apr, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,230</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="58">
                                                        <span class="text-gray-900 fw-bold">58 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#YHD-047</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">01 Apr, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="0">
                                                        <span class="text-gray-900 fw-bold">0 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#SRR-678</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">24 Mar, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$64</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="290">
                                                        <span class="text-gray-900 fw-bold">290 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">AudioEngine HD3</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#PXF-578</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">24 Mar, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="46">
                                                        <span class="text-gray-900 fw-bold">46 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#PXF-778</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">16 Jan, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$4500</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="78">
                                                        <span class="text-gray-900 fw-bold">78 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Dell 32 UltraSharp</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XGY-356</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">22 Dec, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="8">
                                                        <span class="text-gray-900 fw-bold">8 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Google Pixel 6 Pro</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XVR-425</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">27 Dec, 2024</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="124">
                                                        <span class="text-gray-900 fw-bold">124 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-xl-10">
                                 <!--begin::Table Widget 4-->
                                 <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Purchase Order</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <!--begin::Label-->
                                                    <div class="text-gray-500 fs-7 me-2">Cateogry</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="a">Category A</option>
                                                        <option value="b">Category A</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <!--begin::Label-->
                                                    <div class="text-gray-500 fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="Shipped">Shipped</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Pending">Pending</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <div class="position-relative my-1">
                                                    <i class="ki-outline ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4"></i>
                                                    <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="text-end min-w-100px">Created</th>
                                                    <th class="text-end min-w-125px">Customer</th>
                                                    <th class="text-end min-w-100px">Total</th>
                                                    <th class="text-end min-w-100px">Profit</th>
                                                    <th class="text-end min-w-50px">Status</th>
                                                    <th class="text-end"></th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                                    <td colspan="2">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                                <img src="" data-kt-src-path="assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
                                                            </a>
                                                            <div class="d-flex flex-column text-muted">
                                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
                                                                <div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7">Cost</div>
                                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7">Qty</div>
                                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7">Total</div>
                                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7 me-3">On hand</div>
                                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                                    </td>
                                                    <td class="text-end">7 min ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                                    </td>
                                                    <td class="text-end">$630.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$86.70</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                                    </td>
                                                    <td class="text-end">52 min ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                                    </td>
                                                    <td class="text-end">$25.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$4.20</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                                    </td>
                                                    <td class="text-end">1 hour ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                                    </td>
                                                    <td class="text-end">$1,630.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$203.90</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                                    </td>
                                                    <td class="text-end">3 hour ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                                    </td>
                                                    <td class="text-end">$119.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$12.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                                    </td>
                                                    <td class="text-end">2 day ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                                    </td>
                                                    <td class="text-end">$660.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$52.26</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                                    </td>
                                                    <td class="text-end">2 day ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                                    </td>
                                                    <td class="text-end">$290.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$29.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                                    </td>
                                                    <td class="text-end">7 min ago</td>
                                                    <td class="text-end">
                                                        <a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
                                                    </td>
                                                    <td class="text-end">$590.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$50.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <i class="ki-outline ki-plus fs-4 m-0 toggle-off"></i>
                                                            <i class="ki-outline ki-minus fs-4 m-0 toggle-on"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                    </div>
                    <!--end::Content-->
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
