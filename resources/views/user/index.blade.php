@extends('layouts.app')
@section('title','System User - PT Indo Greenlife Harvest ')
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
                        <li class="breadcrumb-item text-white fw-bold lh-1">User</li>
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
                        <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">Users
                        <!--begin::Description-->
                        <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">System User</span>
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
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                    <!--begin::Add customer-->
                                    <a href="{{url('user/new')}}" class="btn btn-primary">Tambah User</a>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->

                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <div id="userlist_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                <div id="" class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="userlist" style="width: 1139.5px;">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Role</th>
                                        <th>Last Login</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $u)
                                    <tr>
                                        <td></td>
                                        <td class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{url('user/view/'.$u->id)}}">
                                                    <div class="symbol-label">
                                                        <img src="{{asset($u->foto)}}" alt="Emma Smith" class="w-100">
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a href="{{url('user/view/'.$u->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$u->name}}</a>
                                                <span>{{$u->email}}</span>
                                            </div>
                                            <!--begin::User details-->
                                        </td>
                                        <td>{{$u->divisi}}</td>
                                        <td>{{$u->roles_name}}</td>
                                        <td>{{\Carbon\Carbon::parse($u->last_login)->diffForHumans()}}</td>
                                        <td> <a href="{{url('user/detail/'.$u->id)}}" class="btn btn-sm rounded-pill btn-primary"><i class="bi bi-info-circle"></i></a>
                                            <a href="{{url('user/edit/'.$u->id)}}" class="btn btn-sm rounded-pill btn-warning"><i class="bi bi-pencil"></i></a>
                                            <button type="button" href="{{url('user/delete/'.$u->id)}}" class="deletebtn btn btn-sm rounded-pill btn-danger"><i class="bi bi-trash"></i></button></td>
                                       </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table></div>

                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
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
    </script>
@endsection
