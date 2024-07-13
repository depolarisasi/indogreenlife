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
                            <a href="{{url('user')}}" class=" text-hover-primary">
                                User
                            </a>
                        </li>

                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item  fw-bold lh-1">Detail User</li>
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
                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Detail Users
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">Detail User</span>
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
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 mb-10">
                            <!--begin::Card-->
                            <div class="card mb-5 mb-xl-8">
                                <!--begin::Card body-->
                                <div class="card-body pt-15">
                                    <!--begin::Summary-->
                                    <div class="d-flex flex-center flex-column mb-5">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-100px symbol-circle mb-7">
                                            <img src="{{asset($show->foto)}}" alt="image">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{$show->name}}</a>
                                        <!--end::Name-->
                                        <!--begin::Position-->
                                        <div class="fs-5 fw-semibold text-muted mb-6">{{$show->roles_name}}</div>
                                        <!--end::Position-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap flex-center">
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-75px">{{\Carbon\Carbon::parse($show->last_login)->diffForHumans()}}</span>
                                                </div>
                                                <div class="fw-semibold text-muted">Last Login</div>
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Summary-->

                                    <!--end::Details toggle-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--begin::Details content-->
                                    <div id="kt_customer_view_details" class="collapse show" style="">
                                        <div class="py-5 fs-6">
                                            <!--begin::Badge-->
                                            <div class="badge badge-light-info d-inline">Divisi {{$show->divisi}}</div>
                                            <!--begin::Badge-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Nomor Induk</div>
                                            <div class="text-gray-600">{{$show->nomorinduk}}</div>
                                            <!--begin::Details item-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Email</div>
                                            <div class="text-gray-600">
                                                <a href="#" class="text-gray-600 text-hover-primary">{{$show->email}}</a>
                                            </div>
                                            <!--begin::Details item-->
                                            <!--begin::Details item-->
                                            <div class="fw-bold mt-5">Nomor Telepon</div>
                                            <div class="text-gray-600">{{$show->nohp}}</div>
                                            <!--begin::Details item-->
                                        </div>
                                    </div>
                                    <!--end::Details content-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
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
