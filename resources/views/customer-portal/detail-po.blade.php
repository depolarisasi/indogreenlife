@extends('layouts.app-customer')
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
                            <div class="card card-flush pt-3 mb-3 mb-xl-5">
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
                                <div class="card-body pt-1">
                                    <!--begin::Section-->
                                    <div class="mb-1">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-1">
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
                                                    <tr>
                                                        <td class="text-gray-500">Tanggal PO :</td>
                                                        <td class="text-gray-800">02 Januari 2024 21:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Due Date PO :</td>
                                                        <td class="text-gray-800">02 Juni 2024 21:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Dibuat Oleh:</td>
                                                        <td class="text-gray-800">New Order</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Status:</td>
                                                        <td class="text-gray-800">New Order</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Keterangan:</td>
                                                        <td class="text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum molestias non qui sapiente, eligendi rerum obcaecati? Doloribus</td>
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
                                                        <td class="text-gray-500">Produk:</td>
                                                        <td class="text-gray-800">MUSCLE FARMING Mass Gainer Vanilla Pancake</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Sample:</td>
                                                        <td class="text-gray-800">#IGH213123</td>
                                                    </tr>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-500">Gramasi/Penyajian:</td>
                                                        <td class="text-gray-800">900.00gr</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Jumlah/QTY:</td>
                                                        <td class="text-gray-800">4.000 Pouch</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Jumlah/QTY Konversi (sachet):</td>
                                                        <td class="text-gray-800">25.714</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Jumlah/QTY Produksi:</td>
                                                        <td class="text-gray-800">25.714 Sachet</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Hasil Produksi:</td>
                                                        <td class="text-gray-800">0 Sachet</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Harga Non-PPN:</td>
                                                        <td class="text-gray-800">85.000,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Total Harga Non-PPN:</td>
                                                        <td class="text-gray-800">2.185.690.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-500">Catatan:</td>
                                                        <td class="text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum molestias non qui sapiente, eligendi rerum obcaecati? Doloribus</td>
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
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                             <!--begin::Card-->
                             <div class="card card-flush pt-3 mb-3 mb-xl-5">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Progress PO</h2>
                                    </div>
                                    <!--begin::Card title-->

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-3">
                                    <!--begin::Section-->
                                    <div class="mb-0">
                                        <!--begin::Title-->
                                        <div class="h-8px bg-light rounded mb-3">
                                            <div class="bg-primary rounded h-8px" role="progressbar" style="width: 68%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex flex-wrap">

                                            <!--begin::Stat-->
                                            <div class="border border-success border-solid rounded min-w-50px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-outline ki-check fs-1 text-success"></i>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6">PPIC</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div class="border border-success border-solid rounded min-w-50px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-outline ki-check fs-1 text-success"></i>

                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6">Pengecekan Bahan</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div class="border border-success border-solid rounded min-w-50px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-outline ki-check fs-1 text-success"></i>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6">Pengecekan Packaging</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div class="border border-warning border-solid rounded min-w-50px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-outline ki-time fs-1 text-warning"></i>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6">Proses Produksi</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div class="border border-grey border-solid rounded min-w-50px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-outline ki-time fs-1 text-grey"></i>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6">Selesai</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Card-->
                            <div class="card card-flush pt-3 mb-3 mb-xl-3">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Raw Material</h2>
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary">Update Raw Material</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-3">
                                    <!--begin::Section-->
                                    <div class="mb-0">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Detail Raw Material:</h5>
                                        <!--end::Title-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th>Kode Sample</th>
                                                        <th>Gram Per Sachet (Gr)</th>
                                                        <th>Cost Per Sachet</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td><a href="{{url('sample/detail')}}">Jack Hammer Weight Gainer </a></td>
                                                        <td>140</td>
                                                        <td>11.010</td>
                                                      </tr>
                                                    </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <!--begin::Table-->
                                            <table class="table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th>Raw Material</th>
                                                        <th>Gram Per Sachet (Gr)</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>AKA23232 - Whey Protein Concentrat 90% merk Yinlong</td>
                                                        <td>15,000</td>
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
                            <!--begin::Card-->
                            <div class="card card-flush pt-3 mb-3 mb-xl-3">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Packaging</h2>
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary">Update Packaging</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-3">
                                    <!--begin::Section-->
                                    <div class="mb-0">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Detail Packaging:</h5>
                                        <div class="mg-t-0" id="detailPackaging">
                                            <p><strong>Box:</strong> <span class="badge badge-pill badge-info text-white">Customer</span>, <strong>Roll:</strong> <span class="badge badge-pill badge-success text-white">Tanpa Roll</span>, <strong>Botol:</strong> <span class="badge badge-pill badge-success text-white">Tanpa Botol</span>, <strong>Karton:</strong> <span class="badge badge-pill badge-warning text-white">IGH Polos</span></p>
                                            <div class="row mg-t-0" id="packaging-detail">
                                              <div class="col-md">
                                                <p class="invoice-info-row"><span>Jumlah/QTY</span> <span>64.286 Pouch</span></p>
                                                <p class="invoice-info-row"><span>Gramasi (gr)</span> <span>900,00</span></p>
                                                <p class="invoice-info-row"><span>Tipe Sachet</span> <span>-</span></p>
                                                <p class="invoice-info-row"><span>Ukuran Alu Foil (P X L)</span> <span>0.00 cm x 0.00 cm</span></p>
                                                <p class="invoice-info-row"><span>Tipe Alu. Foil</span> <span></span></p>
                                                <p class="invoice-info-row"><span>Dikemas Dalam</span> <span>Pouch</span></p>
                                                <p class="invoice-info-row"><span>Tipe Kemasan</span> <span></span></p>
                                                <p class="invoice-info-row"><span>Isi Dalam Kemasan</span> <span>1 Pouch / 64.286 Pouch</span></p>
                                              </div>
                                              <div class="col-md">
                                                <p class="invoice-info-row"><span>Roll</span> <span></span></p>
                                                <p class="invoice-info-row"><span>Voucher</span> <span><span class="badge badge-pill badge-danger text-white">Tidak</span></span></p>
                                                <p class="invoice-info-row"><span>Scoop</span> <span><span class="badge badge-pill badge-success text-white">Ya</span></span></p>
                                                <p class="invoice-info-row"><span>Hologram</span> <span><span class="badge badge-pill badge-success text-white">Ya</span></span></p>
                                                <p class="invoice-info-row"><span>Sticker Sachet</span> <span><span class="badge badge-pill badge-danger text-white">Tidak</span></span></p>
                                                <p class="invoice-info-row"><span>Sticker Botol/Box/Karton</span> <span><span class="badge badge-pill badge-danger text-white">Tidak</span></span></p>
                                                <p class="invoice-info-row"><span>Running Number</span> <span></span></p>
                                                <p class="invoice-info-row"><span>Kapasitas Dalam Karton</span> <span>0 Pouch</span></p>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                             <!--begin::Card-->
                             <div class="card card-flush pt-3 mb-3 mb-xl-3">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Detail Produksi & Batch</h2>
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary">Update Detail Produksi & Batch</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-3">
                                    <!--begin::Section-->
                                    <div class="mb-0">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Total Batch: 2</h5>
                                        <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                  <th>No Batch</th>
                                                  <th>Tanggal Timbang</th>
                                                  <th>Tanggal Mixing</th>
                                                  <th>Estimasi Qty SKU</th>
                                                  <th>Estimasi Qty Serving</th>
                                                  <th>Hasil Akhir</th>
                                                  <th>Area Produksi</th>
                                                  <th>Keterangan</th>
                                                  <th>Tanggal Dibuat</th>
                                                  <th>Status</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                                              <tr>
                                                  <td>1</td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="text-right">2.500 Pouch</td>
                                                  <td class="text-right">64.286</td>
                                                  <td class="text-right">0</td>
                                                  <td></td>
                                                  <td></td>
                                                  <td>12 Jun 2024 17:21:35</td>
                                                  <td><span class="badge badge-pill badge-danger text-white">Pending</span></td>
                                              </tr>
                                                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                             <!--begin::Card-->
                             <div class="card card-flush pt-3 mb-3 mb-xl-3">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Riwayat Produksi & SO</h2>
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary">Update Riwayat Produksi & SO</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <div class="card-body p-5" >
													<!--begin::Timeline-->
													<div class="timeline timeline-border-dashed">
														<!--begin::Timeline item-->
														<div class="timeline-item">
															<!--begin::Timeline line-->
															<div class="timeline-line"></div>
															<!--end::Timeline line-->
															<!--begin::Timeline icon-->
															<div class="timeline-icon me-4">
																<i class="ki-outline ki-flag fs-2 text-gray-500"></i>
															</div>
															<!--end::Timeline icon-->
															<!--begin::Timeline content-->
															<div class="timeline-content mb-10 mt-n2">
																<!--begin::Timeline heading-->
																<div class="overflow-auto pe-3">
																	<!--begin::Title-->
																	<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="d-flex align-items-center mt-1 fs-6">
																		<!--begin::Info-->
																		<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																		<!--end::Info-->
																		<!--begin::User-->
																		<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1">
																			<img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="img">
																		</div>
																		<!--end::User-->
																	</div>
																	<!--end::Description-->
																</div>
																<!--end::Timeline heading-->
															</div>
															<!--end::Timeline content-->
														</div>
														<!--end::Timeline item-->
														<!--end::Timeline item-->
														<!--begin::Timeline item-->
														<div class="timeline-item">
															<!--begin::Timeline line-->
															<div class="timeline-line"></div>
															<!--end::Timeline line-->
															<!--begin::Timeline icon-->
															<div class="timeline-icon">
																<i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
															</div>
															<!--end::Timeline icon-->
															<!--begin::Timeline content-->
															<div class="timeline-content mb-10 mt-n1">
																<!--begin::Timeline heading-->
																<div class="pe-3 mb-5">
																	<!--begin::Title-->
																	<div class="fs-5 fw-semibold mb-2">Task
																	<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
																	<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="d-flex align-items-center mt-1 fs-6">
																		<!--begin::Info-->
																		<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																		<!--end::Info-->
																		<!--begin::User-->
																		<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1">
																			<img src="{{asset('assets/media/avatars/300-14.jpg')}}" alt="img">
																		</div>
																		<!--end::User-->
																	</div>
																	<!--end::Description-->
																</div>
																<!--end::Timeline heading-->
															</div>
															<!--end::Timeline content-->
														</div>
														<!--end::Timeline item-->
														<!--begin::Timeline item-->
														<div class="timeline-item">
															<!--begin::Timeline line-->
															<div class="timeline-line"></div>
															<!--end::Timeline line-->
															<!--begin::Timeline icon-->
															<div class="timeline-icon">
																<i class="ki-outline ki-sms fs-2 text-gray-500"></i>
															</div>
															<!--end::Timeline icon-->
															<!--begin::Timeline content-->
															<div class="timeline-content mb-10 mt-n1">
																<!--begin::Timeline heading-->
																<div class="pe-3 mb-5">
																	<!--begin::Title-->
																	<div class="fs-5 fw-semibold mb-2">New case
																	<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="overflow-auto pb-5">
																		<!--begin::Wrapper-->
																		<div class="d-flex align-items-center mt-1 fs-6">
																			<!--begin::Info-->
																			<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																			<!--end::Info-->
																			<!--begin::User-->
																			<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
																			<!--end::User-->
																		</div>
																		<!--end::Wrapper-->
																	</div>
																	<!--end::Description-->
																</div>
																<!--end::Timeline heading-->
															</div>
															<!--end::Timeline content-->
														</div>
														<!--end::Timeline item-->
														<!--begin::Timeline item-->
														<div class="timeline-item">
															<!--begin::Timeline line-->
															<div class="timeline-line"></div>
															<!--end::Timeline line-->
															<!--begin::Timeline icon-->
															<div class="timeline-icon">
																<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
															</div>
															<!--end::Timeline icon-->
															<!--begin::Timeline content-->
															<div class="timeline-content mb-10 mt-n1">
																<!--begin::Timeline heading-->
																<div class="pe-3 mb-5">
																	<!--begin::Title-->
																	<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="d-flex align-items-center mt-1 fs-6">
																		<!--begin::Info-->
																		<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
																		<!--end::Info-->
																		<!--begin::User-->
																		<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Robert Rich" data-bs-original-title="Robert Rich" data-kt-initialized="1">
																			<img src="{{asset('assets/media/avatars/300-4.jpg')}}" alt="img">
																		</div>
																		<!--end::User-->
																	</div>
																	<!--end::Description-->
																</div>
																<!--end::Timeline heading-->
																<!--begin::Timeline details-->
																<div class="overflow-auto pb-5">
																	<!--begin::Notice-->
																	<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
																		<!--begin::Icon-->
																		<i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
																		<!--end::Icon-->
																		<!--begin::Wrapper-->
																		<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
																			<!--begin::Content-->
																			<div class="mb-3 mb-md-0 fw-semibold">
																				<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
																				<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
																			</div>
																			<!--end::Content-->
																			<!--begin::Action-->
																			<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
																			<!--end::Action-->
																		</div>
																		<!--end::Wrapper-->
																	</div>
																	<!--end::Notice-->
																</div>
																<!--end::Timeline details-->
															</div>
															<!--end::Timeline content-->
														</div>
														<!--end::Timeline item-->
														<!--begin::Timeline item-->
														<div class="timeline-item">
															<!--begin::Timeline line-->
															<div class="timeline-line"></div>
															<!--end::Timeline line-->
															<!--begin::Timeline icon-->
															<div class="timeline-icon">
																<i class="ki-outline ki-basket fs-2 text-gray-500"></i>
															</div>
															<!--end::Timeline icon-->
															<!--begin::Timeline content-->
															<div class="timeline-content mt-n1">
																<!--begin::Timeline heading-->
																<div class="pe-3 mb-5">
																	<!--begin::Title-->
																	<div class="fs-5 fw-semibold mb-2">New order
																	<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="d-flex align-items-center mt-1 fs-6">
																		<!--begin::Info-->
																		<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																		<!--end::Info-->
																		<!--begin::User-->
																		<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
																		<!--end::User-->
																	</div>
																	<!--end::Description-->
																</div>
																<!--end::Timeline heading-->
															</div>
															<!--end::Timeline content-->
														</div>
														<!--end::Timeline item-->
													</div>
													<!--end::Timeline-->
												</div>
                            </div>
                            <!--end::Card-->
                        </div>
                          <!--begin::Sidebar-->
                          <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                            <!--begin::Card-->
                            <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" style="">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Customer</h2>
                                    </div>
                                    <!--end::Card title-->

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 fs-6">
                                    <!--begin::Section-->
                                    <div class="mb-7">
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
                                    <!--end::Section-->
                                    <!--begin::Seperator-->
                                    <div class="separator separator-dashed mb-7"></div>
                                    <!--end::Seperator-->
                                    <!--begin::Section-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Company Details</h5>
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
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Sidebar-->
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
