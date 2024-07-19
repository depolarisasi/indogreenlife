@extends('layouts.app')
@section('title','Detail Sales Order - PT Indo Greenlife Harvest ')
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
                            <a href="{{url('product')}}" class=" text-hover-primary">
                                Sales Order
                            </a>
                        </li>

                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item  fw-bold lh-1">Detail Sales Order</li>
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
                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Detail Sales Order
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">Detail Sales Order</span>
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
    <div class="app-container container-fluid">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_content" class="app-content">
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-lg-5 order-2 order-lg-1 mb-10 mb-lg-0">
                            <!--begin::Card-->
                            <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Sales Order Details</h2>
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary">Update Sales Order</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-3">
                                     <!--begin::Section-->
                                     <div class="mb-2">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-5">
                                            <!--begin::Row-->
                                            <div class="flex-equal me-5">
                                                <!--begin::Details-->
                                        <div class="d-flex align-items-center">

                                            <!--begin::Info-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Sean Bean</a>
                                                <!--end::Name-->
                                                <span class="fw-semibold text-gray-600">(+62) 454 5744 396</span>
                                                <!--begin::Email-->
                                                <a href="#" class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                                <!--end::Email-->
                                                <span class="fw-semibold text-gray-600">Jln. Baranang Siang Indah No. 499, Tegal 14885, Kepri</span>
                                                <span class="fw-semibold text-gray-600">NPWP PvucEWHDTLjbk1F9 </span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="flex-equal">

                                        <div class="d-flex align-items-center">
                                                    <!--begin::Title-->
                                                    <!--end::Title-->
                                                     <!--begin::Info-->
                                                     <div class="d-flex flex-column">
                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">CV Prasetyo Kuswoyo</a>
                                                        <!--end::Name-->
                                                        <span class="fw-semibold text-gray-600">(+62) 454 5744 396</span>
                                                        <!--begin::Email-->
                                                        <a href="#" class="fw-semibold text-gray-600 text-hover-primary">raharja.prasetyo@gunawan.in</a>
                                                        <!--end::Email-->
                                                        <span class="fw-semibold text-gray-600">Dk. Casablanca No. 49, Administrasi Jakarta Utara 89465, Sultra</span>
                                                        <span class="fw-semibold text-gray-600">NPWP PvucEWHDTLjbk1F9  <span class="badge badge-info fw-bold">PKP</span></span>
                                                        <span class="fw-semibold text-gray-600">NIB PvucEWHDTLjbk1F9 </span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <div class="mb-10">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-5">
                                            <!--begin::Row-->
                                            <div class="flex-equal me-5">
                                                <!--begin::Details-->
                                                <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                                    <!--begin::Row-->
                                                    <tbody><tr>
                                                        <td class="text-gray-500 min-w-175px w-175px">No. PO</td>
                                                        <td class="text-gray-800 min-w-200px">
                                                            <a href="#" class="text-gray-800 text-hover-primary">PO.2024.04.00002</a>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-500">No SO</td>
                                                        <td class="text-gray-800">199</td>
                                                    </tr>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-500">Jenis Order:</td>
                                                        <td class="text-gray-800">New Order</td>
                                                    </tr>
                                                    <!--end::Row-->
                                                </tbody></table>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="flex-equal">
                                                <!--begin::Details-->
                                                <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                                    <!--begin::Row-->
                                                    <tbody>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-500">Tanggal PO :</td>
                                                        <td class="text-gray-800">02 Januari 2024 21:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Due Date PO :</td>
                                                        <td class="text-gray-800">02 Juni 2024 21:09</td>
                                                    </tr>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-500">Petugas:</td>
                                                        <td class="text-gray-800">Jack Kremer</td>
                                                    </tr>
                                                    <!--end::Row-->
                                                </tbody></table>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <div class="mb-0">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Produk Sales Orders:</h5>
                                        <!--end::Title-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th class="min-w-125px">Produk</th>
                                                        <th>Sample</th>
                                                        <th>Gramasi (Gr)</th>
                                                        <th>QTY</th>
                                                        <th>Harga Non PPN</th>
                                                        <th>Total Harga Non PPN</th>
                                                        <th>QTY Kemasan</th>
                                                        <th>Unit</th>
                                                        <th>Pack In To</th>
                                                        <th>Box Type</th>
                                                        <th>Gramasi</th>
                                                        <th>Isi Kemasan</th>
                                                        <th>QTY Box / CB</th>
                                                        <th>Uk Alu Foil (PxL)</th>
                                                        <th>Type Alu Foil</th>
                                                        <th>Roll</th>
                                                        <th>Type Sachet</th>
                                                        <th>Voucher</th>
                                                        <th>Scoop</th>
                                                        <th>Hologram</th>
                                                        <th>Sticker Sachet</th>
                                                        <th>Sticker Botol/Box/Carton</th>
                                                        <th>Running Number</th>
                                                        <th>Order Box</th>
                                                        <th>Order Roll</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td><a href="{{url('product/detail')}}">Jack Hammer Weight Gainer </a></td>
                                                        <td><a href="{{url('sample/detail')}}">IGH05420</a></td>
                                                        <td>900.00</td>
                                                        <td>2,500</td>
                                                        <td>85,000.00</td>
                                                        <td>212,500,000.00</td>

                                                        <td>1 / 2500</td>
                                                        <td>Pouch</td>
                                                        <td>Pouch</td>
                                                        <td></td>
                                                        <td>900,00</td>
                                                        <td>1</td>
                                                        <td>1 / 64.286</td>
                                                        <td>0.00 x 0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Customer</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Tanpa Roll</span></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Proses Produksi</span></td>
                                                        <td> <a href="{{url('sales-order/detail-product')}}" class="btn btn-light-primary btn-xs">
                                                            <i class="ki-outline ki-magnifier fs-3"></i> Detail</a></td>
                                                      </tr>
                                                      <tr>
                                                        <td><a href="{{url('product/detail')}}">Jack Hammer Weight Gainer </a></td>
                                                        <td><a href="{{url('sample/detail')}}">IGH05420</a></td>
                                                        <td>900.00</td>
                                                        <td>2,500</td>
                                                        <td>85,000.00</td>
                                                        <td>212,500,000.00</td>

                                                        <td>1 / 2500</td>
                                                        <td>Pouch</td>
                                                        <td>Pouch</td>
                                                        <td></td>
                                                        <td>900,00</td>
                                                        <td>1</td>
                                                        <td>1 / 64.286</td>
                                                        <td>0.00 x 0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Customer</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Tanpa Roll</span></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Proses Produksi</span></td>
                                                        <td> <a href="{{url('sales-order/detail-product')}}" class="btn btn-light-primary btn-xs">
                                                            <i class="ki-outline ki-magnifier fs-3"></i> Detail</a></td>
                                                      </tr>
                                                      <tr>
                                                        <td><a href="{{url('product/detail')}}">Jack Hammer Weight Gainer </a></td>
                                                        <td><a href="{{url('sample/detail')}}">IGH05420</a></td>
                                                        <td>900.00</td>
                                                        <td>2,500</td>
                                                        <td>85,000.00</td>
                                                        <td>212,500,000.00</td>

                                                        <td>1 / 2500</td>
                                                        <td>Pouch</td>
                                                        <td>Pouch</td>
                                                        <td></td>
                                                        <td>900,00</td>
                                                        <td>1</td>
                                                        <td>1 / 64.286</td>
                                                        <td>0.00 x 0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Customer</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Tanpa Roll</span></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Proses Produksi</span></td>
                                                        <td> <a href="{{url('sales-order/detail-product')}}" class="btn btn-light-primary btn-xs">
                                                            <i class="ki-outline ki-magnifier fs-3"></i> Detail</a></td>
                                                      </tr>
                                                      <tr>
                                                        <td><a href="{{url('product/detail')}}">Jack Hammer Weight Gainer </a></td>
                                                        <td><a href="{{url('sample/detail')}}">IGH05420</a></td>
                                                        <td>900.00</td>
                                                        <td>2,500</td>
                                                        <td>85,000.00</td>
                                                        <td>212,500,000.00</td>

                                                        <td>1 / 2500</td>
                                                        <td>Pouch</td>
                                                        <td>Pouch</td>
                                                        <td></td>
                                                        <td>900,00</td>
                                                        <td>1</td>
                                                        <td>1 / 64.286</td>
                                                        <td>0.00 x 0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Ya</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td><span class="badge badge-pill badge-danger text-white">Tidak</span></td>
                                                        <td></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Customer</span></td>
                                                        <td><span class="badge badge-pill badge-success text-white">Tanpa Roll</span></td>
                                                        <td><span class="badge badge-pill badge-info text-white">Proses Produksi</span></td>
                                                        <td> <a href="{{url('sales-order/detail-product')}}" class="btn btn-light-primary btn-xs">
                                                            <i class="ki-outline ki-magnifier fs-3"></i> Detail</a></td>
                                                      </tr>


                                                    </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
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
