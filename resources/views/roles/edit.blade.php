@extends('layouts.app')
@section('title','Ubah Roles - PT Indo Greenlife Harvest ')
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
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            <a href="{{url('/')}}" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-white fs-3"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            <a href="{{url('roles')}}" class="text-white text-hover-primary">
                                Roles
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">Ubah Roles</li>
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
                        <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">Ubah Roles {{$edit->roles_name}}
                        <!--begin::Description-->
                        <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">User Role dan Hak Akses</span>
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
    <div class="app-container container-xxl" >
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content">
                    <!--begin::Card-->
                    <div class="card">

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
 <!--begin::Form-->
 <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('roles/update')}}" method="post">
    @csrf
    <input type="hidden" name="roles_id" value="{{$edit->roles_id}}">
    <!--begin::Modal body-->
        <!--begin::Scroll-->
             <!--begin::Input group-->
            <div class="fv-row mb-7 mt-5 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Nama Role</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" value="{{$edit->roles_name}}" name="roles_name">
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
                        <input type="checkbox"  @if(in_array($key,explode(',',$edit?$edit->roles_permission:""))) checked="checked" @endif value="{{$key}}" name="roles_permission[]"/>
                        <span></span>
                        {{$a}}
                    </label>
                    @endforeach
                </div>
                <!--end::Input-->
             </div>
            <!--end::Input group-->

    <!--end::Modal body-->
        <!--begin::Button-->
        <button type="submit" class="btn btn-primary">
            <span class="indicator-label">Ubah</span>
        </button>
        <!--end::Button-->
</form>
<!--end::Form-->

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
