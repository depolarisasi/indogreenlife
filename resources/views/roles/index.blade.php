@extends('layouts.app')
@section('title','Roles - PT Indo Greenlife Harvest ')
@section('css')
<style>
.checkbox-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column; }
    .checkbox-list .checkbox {
      margin-bottom: 1rem; }
      .checkbox-list .checkbox span {
        margin-right: 0.75rem; }
      .checkbox-list .checkbox:last-child {
        margin-bottom: 0; }
</style>
@endsection
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
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item  fw-bold lh-1">Roles</li>
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
                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Roles
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">User Role dan Hak Akses</span>
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


                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                                <!--begin::Col-->
                                @foreach($roles as $r)
                                <div class="col-md-4">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-md-100">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>{{$r->roles_name}}</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-1">
                                            <!--begin::Users-->
                                            {{-- <div class="fw-bold text-gray-600 mb-5">Total users with this role: 5</div> --}}
                                            <!--end::Users-->
                                            <!--begin::Permissions-->
                                            <div class="d-flex flex-column text-gray-600">
                                                @php
                                            $acc_array = explode(",",$r->roles_permission);
                                        @endphp
                                        <td>@if($r->roles_permission)
                                            @foreach($acc_array as $key => $val)
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span>{{$access[$val]}}</div>
                                        @endforeach
                                    @endif
                                            </div>
                                            <!--end::Permissions-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer flex-wrap pt-0">
                                            <a href="{{url('roles/edit/'.$r->roles_id)}}" class="btn btn-sm rounded-pill btn-warning"><i class="bi bi-pencil"></i></a>
                                            <button type="button" href="{{url('roles/delete/'.$r->roles_id)}}" class="deletebtn btn btn-sm rounded-pill btn-danger"><i class="bi bi-trash"></i></button></td>
                                      </div>
                                        <!--end::Card footer-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                                @endforeach

                                <div class="col-md-4">
                                    <!--begin::Card-->
                                    <div class="card h-md-100">
                                        <!--begin::Card body-->
                                        <div class="card-body d-flex flex-center">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-clear d-flex flex-column flex-center"  data-bs-toggle="modal" data-bs-target="#kt_modal_add_roles">
                                                <!--begin::Illustration-->
                                                <img src="{{asset('assets/media/illustrations/sketchy-1/4.png')}}" alt="" class="mw-100 mh-150px mb-7">
                                                <!--end::Illustration-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Tambah Role Baru</div>
                                                <!--end::Label-->
                                            </button>
                                            <!--begin::Button-->
                                        </div>
                                        <!--begin::Card body-->
                                    </div>
                                    <!--begin::Card-->
                                </div>
                            </div>

                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Modals-->
                    <!--begin::Modal - Customers - Add-->
                    <div class="modal fade" id="kt_modal_add_roles" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Form-->
                                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('roles/store')}}" id="kt_modal_add_roles_form" method="post">
                                    @csrf
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_roles_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Tambah Roles</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" onclick="$('#kt_modal_add_roles').modal('hide');">
                                            <i class="ki-outline ki-cross fs-1"></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body py-10 px-lg-17">
                                        <!--begin::Scroll-->
                                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_roles_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_roles_header" data-kt-scroll-wrappers="#kt_modal_add_roles_scroll" data-kt-scroll-offset="300px" style="max-height: 419px;">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold mb-2">Nama Role</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="roles_name">
                                                <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span class="required">Hak Akses</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="checkbox-list">
                                                    @foreach($access as $key => $a)
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="{{$key}}" name="roles_permission[]"/>
                                                        <span></span>
                                                        {{$a}}
                                                    </label>
                                                    @endforeach
                                                </div>
                                                <!--end::Input-->
                                             </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Modal body-->
                                    <!--begin::Modal footer-->
                                    <div class="modal-footer flex-center">
                                        <!--begin::Button-->
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Tambah</span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Modal footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - Customers - Add-->
                    <!--end::Modals-->
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
   var table = $("#roles").DataTable({

    dom : '<"d-flex align-items-center position-relative mt-3"l>rt<"bottom"ip><"clear">',

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
