@extends('layouts.app')
@section('title','Ubah Customer - PT Indo Greenlife Harvest ')
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
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item  fw-bold lh-1">
                            <a href="{{url('customer')}}" class=" text-hover-primary">
                                Customer
                            </a>
                        </li>

                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4  mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item  fw-bold lh-1">Ubah Customer</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Toolbar wrapper=-->
                <!--begin::Toolbar wrapper=-->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">

                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Ubah Customer
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">Ubah Customer {{$edit->customer_name}}</span>
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
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('customer/update')}}" method="post"  enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-2 pt-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Type Customer</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">

                                            <select name="customer_type" id="customertype" class="form-select form-select-sm form-select-solid">
                                                <option value="Perorangan" @if($edit->customer_type == "Perorangan") selected @endif>Perorangan</option>
                                                <option value="Perusahaan" @if($edit->customer_type == "Perusahaan") selected @endif>Perusahaan</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
<div id="personal">
                                    <hr>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <h3 class="col-lg-12 mt-2">Detail Personal</h3>
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Prefix Title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="customer_title" class="form-select form-select-sm form-select-solid">
                                                <option value="" @if($edit->customer_title == "") selected @endif> - </option>
                                                <option value="Tuan" @if($edit->customer_title == "Tuan") selected @endif>Tuan / Tn</option>
                                                <option value="Nyonya" @if($edit->customer_title == "Nyonya") selected @endif>Nyonya / Ny</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Customer</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_name" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_name}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">NIK / ID</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_nik" maxlength="16" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_nik}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Nomor Pokok Wajib Pajak (NPWP) Pribadi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div np="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_npwp" maxlength="22" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_npwp}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Email</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="email" name="customer_email" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_email}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Nomor Telepon Pribadi</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="customer_nohp" maxlength="16" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_nohp}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Alamat Pribadi</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <textarea name="customer_address" class="form-control form-control-lg form-control-solid">{{$edit->customer_address}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                    <div id="company">
                                    <hr>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <h3 class="col-lg-12 mt-2">Detail Perusahaan</h3>
                                    </div>
                                      <!--begin::Input group-->
                                      <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Perusahaan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_company" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_company}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                     <!--begin::Input group-->
                                     <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nomor Izin Berusaha (NIB) Perusahaan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_companynib" maxlength="13"  class="form-control form-control-lg form-control-solid" value="{{$edit->customer_companynib}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                     <!--begin::Input group-->
                                     <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nomor Poko Wajib Pajak (NPWP) Perusahaan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_companynpwp" maxlength="22"  class="form-control form-control-lg form-control-solid" value="{{$edit->customer_companynpwp}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Jenis Kewajiban Pajak (PKP)</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="customer_companytax" class="form-select form-select-sm form-select-solid">
                                                <option value="" @if($edit->customer_companytax == "") selected @endif> - </option>
                                                <option value="PKP" @if($edit->customer_companytax == "PKP") selected @endif>Pengusaha Kena Pajak (PKP)</option>
                                                <option value="NON PKP" @if($edit->customer_companytax == "NON PKP") selected @endif>Non Pengusaha Kena Pajak (PKP)</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Alamat Perusahaan</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <textarea name="customer_companyaddress" class="form-control form-control-lg form-control-solid">{{$edit->customer_companyaddress}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Alamat Perusahaan 2</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <textarea name="customer_companyaddress2" class="form-control form-control-lg form-control-solid">{{$edit->customer_companyaddress2}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Nomor Telepon Perusahaan</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="customer_companytelp" maxlength="16" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_companytelp}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Email Perusahaan</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="email" name="customer_companyemail" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_companyemail}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                     <!--begin::Input group-->
                                     <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">HAKI Perusahaan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_companyhaki" class="form-control form-control-lg form-control-solid" value="{{$edit->customer_companyhaki}}">
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                     <!--begin::Input group-->
                                   <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Logo</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{asset($edit->customer_companylogo)}})">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-pencil fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="customer_companylogo" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="foto_remove" value="1">
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-cross fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-cross fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Negara</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="customer_countrycode" class="form-select form-select-sm form-select-solid">
                                                <option value="AF" @if($edit->customer_countrycode == "AF") selected @endif>Afghanistan 🇦🇫</option>
                                                <option value="AO" @if($edit->customer_countrycode == "AO") selected @endif>Angola 🇦🇴</option>
                                                <option value="AL" @if($edit->customer_countrycode == "AL") selected @endif>Albania 🇦🇱</option>
                                                <option value="AD" @if($edit->customer_countrycode == "AD") selected @endif>Andorra 🇦🇩</option>
                                                <option value="AE" @if($edit->customer_countrycode == "AE") selected @endif>United Arab Emirates 🇦🇪</option>
                                                <option value="AR" @if($edit->customer_countrycode == "AR") selected @endif>Argentina 🇦🇷</option>
                                                <option value="AM" @if($edit->customer_countrycode == "AM") selected @endif>Armenia 🇦🇲</option>
                                                <option value="AG" @if($edit->customer_countrycode == "AG") selected @endif>Antigua and Barbuda 🇦🇬</option>
                                                <option value="AU" @if($edit->customer_countrycode == "AU") selected @endif>Australia 🇦🇺</option>
                                                <option value="AT" @if($edit->customer_countrycode == "AT") selected @endif>Austria 🇦🇹</option>
                                                <option value="AZ" @if($edit->customer_countrycode == "AZ") selected @endif>Azerbaijan 🇦🇿</option>
                                                <option value="BI" @if($edit->customer_countrycode == "BI") selected @endif>Burundi 🇧🇮</option>
                                                <option value="BE" @if($edit->customer_countrycode == "BE") selected @endif>Belgium 🇧🇪</option>
                                                <option value="BJ" @if($edit->customer_countrycode == "BJ") selected @endif>Benin 🇧🇯</option>
                                                <option value="BF" @if($edit->customer_countrycode == "BF") selected @endif>Burkina Faso 🇧🇫</option>
                                                <option value="BD" @if($edit->customer_countrycode == "BD") selected @endif>Bangladesh 🇧🇩</option>
                                                <option value="BG" @if($edit->customer_countrycode == "BG") selected @endif>Bulgaria 🇧🇬</option>
                                                <option value="BH" @if($edit->customer_countrycode == "BH") selected @endif>Bahrain 🇧🇭</option>
                                                <option value="BS" @if($edit->customer_countrycode == "BS") selected @endif>Bahamas 🇧🇸</option>
                                                <option value="BA" @if($edit->customer_countrycode == "BA") selected @endif>Bosnia and Herzegovina 🇧🇦</option>
                                                <option value="BY" @if($edit->customer_countrycode == "BY") selected @endif>Belarus 🇧🇾</option>
                                                <option value="BZ" @if($edit->customer_countrycode == "BZ") selected @endif>Belize 🇧🇿</option>
                                                <option value="BO" @if($edit->customer_countrycode == "BO") selected @endif>Bolivia 🇧🇴</option>
                                                <option value="BR" @if($edit->customer_countrycode == "BR") selected @endif>Brazil 🇧🇷</option>
                                                <option value="BB" @if($edit->customer_countrycode == "BB") selected @endif>Barbados 🇧🇧</option>
                                                <option value="BN" @if($edit->customer_countrycode == "BN") selected @endif>Brunei 🇧🇳</option>
                                                <option value="BT" @if($edit->customer_countrycode == "BT") selected @endif>Bhutan 🇧🇹</option>
                                                <option value="BW" @if($edit->customer_countrycode == "BW") selected @endif>Botswana 🇧🇼</option>
                                                <option value="CF" @if($edit->customer_countrycode == "CF") selected @endif>Central Crican Republic 🇨🇫</option>
                                                <option value="CA" @if($edit->customer_countrycode == "CA") selected @endif>Canada 🇨🇦</option>
                                                <option value="CH" @if($edit->customer_countrycode == "CH") selected @endif>Switzerland 🇨🇭</option>
                                                <option value="CL" @if($edit->customer_countrycode == "CL") selected @endif>Chile 🇨🇱</option>
                                                <option value="CN" @if($edit->customer_countrycode == "CN") selected @endif>China 🇨🇳</option>
                                                <option value="CI" @if($edit->customer_countrycode == "CI") selected @endif>Ivory Coast 🇨🇮</option>
                                                <option value="CM" @if($edit->customer_countrycode == "CM") selected @endif>Cameroon 🇨🇲</option>
                                                <option value="CD" @if($edit->customer_countrycode == "CD") selected @endif>DR Congo 🇨🇩</option>
                                                <option value="CG" @if($edit->customer_countrycode == "CG") selected @endif>Republic of the Congo 🇨🇬</option>
                                                <option value="CO" @if($edit->customer_countrycode == "CO") selected @endif>Colombia 🇨🇴</option>
                                                <option value="KM" @if($edit->customer_countrycode == "KM") selected @endif>Comoros 🇰🇲</option>
                                                <option value="CV" @if($edit->customer_countrycode == "CV") selected @endif>Cape Verde 🇨🇻</option>
                                                <option value="CR" @if($edit->customer_countrycode == "CR") selected @endif>Costa Rica 🇨🇷</option>
                                                <option value="CU" @if($edit->customer_countrycode == "CU") selected @endif>Cuba 🇨🇺</option>
                                                <option value="CY" @if($edit->customer_countrycode == "CY") selected @endif>Cyprus 🇨🇾</option>
                                                <option value="CZ" @if($edit->customer_countrycode == "CZ") selected @endif>Czechia 🇨🇿</option>
                                                <option value="DE" @if($edit->customer_countrycode == "DE") selected @endif>Germany 🇩🇪</option>
                                                <option value="DJ" @if($edit->customer_countrycode == "DJ") selected @endif>Djibouti 🇩🇯</option>
                                                <option value="DM" @if($edit->customer_countrycode == "DM") selected @endif>Dominica 🇩🇲</option>
                                                <option value="DK" @if($edit->customer_countrycode == "DK") selected @endif>Denmark 🇩🇰</option>
                                                <option value="DO" @if($edit->customer_countrycode == "DO") selected @endif>Dominican Republic 🇩🇴</option>
                                                <option value="DZ" @if($edit->customer_countrycode == "DZ") selected @endif>Algeria 🇩🇿</option>
                                                <option value="EC" @if($edit->customer_countrycode == "EC") selected @endif>Ecuador 🇪🇨</option>
                                                <option value="EG" @if($edit->customer_countrycode == "EG") selected @endif>Egypt 🇪🇬</option>
                                                <option value="ER" @if($edit->customer_countrycode == "ER") selected @endif>Eritrea 🇪🇷</option>
                                                <option value="ES" @if($edit->customer_countrycode == "ES") selected @endif>Spain 🇪🇸</option>
                                                <option value="EE" @if($edit->customer_countrycode == "EE") selected @endif>Estonia 🇪🇪</option>
                                                <option value="ET" @if($edit->customer_countrycode == "ET") selected @endif>Ethiopia 🇪🇹</option>
                                                <option value="FI" @if($edit->customer_countrycode == "FI") selected @endif>Finland 🇫🇮</option>
                                                <option value="FJ" @if($edit->customer_countrycode == "FJ") selected @endif>Fiji 🇫🇯</option>
                                                <option value="FR" @if($edit->customer_countrycode == "FR") selected @endif>France 🇫🇷</option>
                                                <option value="FM" @if($edit->customer_countrycode == "FM") selected @endif>Micronesia 🇫🇲</option>
                                                <option value="GA" @if($edit->customer_countrycode == "GA") selected @endif>Gabon 🇬🇦</option>
                                                <option value="GB" @if($edit->customer_countrycode == "GB") selected @endif>United Kingdom 🇬🇧</option>
                                                <option value="GE" @if($edit->customer_countrycode == "GE") selected @endif>Georgia 🇬🇪</option>
                                                <option value="GH" @if($edit->customer_countrycode == "GH") selected @endif>Ghana 🇬🇭</option>
                                                <option value="GN" @if($edit->customer_countrycode == "GN") selected @endif>Guinea 🇬🇳</option>
                                                <option value="GM" @if($edit->customer_countrycode == "GM") selected @endif>Gambia 🇬🇲</option>
                                                <option value="GW" @if($edit->customer_countrycode == "GW") selected @endif>Guinea-Bissau 🇬🇼</option>
                                                <option value="GQ" @if($edit->customer_countrycode == "GQ") selected @endif>Equatorial Guinea 🇬🇶</option>
                                                <option value="GR" @if($edit->customer_countrycode == "GR") selected @endif>Greece 🇬🇷</option>
                                                <option value="GD" @if($edit->customer_countrycode == "GD") selected @endif>Grenada 🇬🇩</option>
                                                <option value="GT" @if($edit->customer_countrycode == "GT") selected @endif>Guatemala 🇬🇹</option>
                                                <option value="GY" @if($edit->customer_countrycode == "GY") selected @endif>Guyana 🇬🇾</option>
                                                <option value="HN" @if($edit->customer_countrycode == "HN") selected @endif>Honduras 🇭🇳</option>
                                                <option value="HR" @if($edit->customer_countrycode == "HR") selected @endif>Croatia 🇭🇷</option>
                                                <option value="HT" @if($edit->customer_countrycode == "HT") selected @endif>Haiti 🇭🇹</option>
                                                <option value="HU" @if($edit->customer_countrycode == "HU") selected @endif>Hungary 🇭🇺</option>
                                                <option value="ID" @if($edit->customer_countrycode == "ID") selected @endif>Indonesia 🇮🇩</option>
                                                <option value="IN" @if($edit->customer_countrycode == "IN") selected @endif>India 🇮🇳</option>
                                                <option value="IE" @if($edit->customer_countrycode == "IE") selected @endif>Ireland 🇮🇪</option>
                                                <option value="IR" @if($edit->customer_countrycode == "IR") selected @endif>Iran 🇮🇷</option>
                                                <option value="IQ" @if($edit->customer_countrycode == "IQ") selected @endif>Iraq 🇮🇶</option>
                                                <option value="IS" @if($edit->customer_countrycode == "IS") selected @endif>Iceland 🇮🇸</option>
                                                <option value="IL" @if($edit->customer_countrycode == "IL") selected @endif>Israel 🇮🇱</option>
                                                <option value="IT" @if($edit->customer_countrycode == "IT") selected @endif>Italy 🇮🇹</option>
                                                <option value="JM" @if($edit->customer_countrycode == "JM") selected @endif>Jamaica 🇯🇲</option>
                                                <option value="JO" @if($edit->customer_countrycode == "JO") selected @endif>Jordan 🇯🇴</option>
                                                <option value="JP" @if($edit->customer_countrycode == "JP") selected @endif>Japan 🇯🇵</option>
                                                <option value="KZ" @if($edit->customer_countrycode == "KZ") selected @endif>Kazakhstan 🇰🇿</option>
                                                <option value="KE" @if($edit->customer_countrycode == "KE") selected @endif>Kenya 🇰🇪</option>
                                                <option value="KG" @if($edit->customer_countrycode == "KG") selected @endif>Kyrgyzstan 🇰🇬</option>
                                                <option value="KH" @if($edit->customer_countrycode == "KH") selected @endif>Cambodia 🇰🇭</option>
                                                <option value="KI" @if($edit->customer_countrycode == "KI") selected @endif>Kiribati 🇰🇮</option>
                                                <option value="KN" @if($edit->customer_countrycode == "KN") selected @endif>Saint Kitts and Nevis 🇰🇳</option>
                                                <option value="KR" @if($edit->customer_countrycode == "KR") selected @endif>South Korea 🇰🇷</option>
                                                <option value="KW" @if($edit->customer_countrycode == "KW") selected @endif>Kuwait 🇰🇼</option>
                                                <option value="LA" @if($edit->customer_countrycode == "LA") selected @endif>Laos 🇱🇦</option>
                                                <option value="LB" @if($edit->customer_countrycode == "LB") selected @endif>Lebanon 🇱🇧</option>
                                                <option value="LR" @if($edit->customer_countrycode == "LR") selected @endif>Liberia 🇱🇷</option>
                                                <option value="LY" @if($edit->customer_countrycode == "LY") selected @endif>Libya 🇱🇾</option>
                                                <option value="LC" @if($edit->customer_countrycode == "LC") selected @endif>Saint Lucia 🇱🇨</option>
                                                <option value="LI" @if($edit->customer_countrycode == "LI") selected @endif>Liechtenstein 🇱🇮</option>
                                                <option value="LK" @if($edit->customer_countrycode == "LK") selected @endif>Sri Lanka 🇱🇰</option>
                                                <option value="LS" @if($edit->customer_countrycode == "LS") selected @endif>Lesotho 🇱🇸</option>
                                                <option value="LT" @if($edit->customer_countrycode == "LT") selected @endif>Lithuania 🇱🇹</option>
                                                <option value="LU" @if($edit->customer_countrycode == "LU") selected @endif>Luxembourg 🇱🇺</option>
                                                <option value="LV" @if($edit->customer_countrycode == "LV") selected @endif>Latvia 🇱🇻</option>
                                                <option value="MA" @if($edit->customer_countrycode == "MA") selected @endif>Morocco 🇲🇦</option>
                                                <option value="MC" @if($edit->customer_countrycode == "MC") selected @endif>Monaco 🇲🇨</option>
                                                <option value="MD" @if($edit->customer_countrycode == "MD") selected @endif>Moldova 🇲🇩</option>
                                                <option value="MG" @if($edit->customer_countrycode == "MG") selected @endif>Madagascar 🇲🇬</option>
                                                <option value="MV" @if($edit->customer_countrycode == "MV") selected @endif>Maldives 🇲🇻</option>
                                                <option value="MX" @if($edit->customer_countrycode == "MX") selected @endif>Mexico 🇲🇽</option>
                                                <option value="MH" @if($edit->customer_countrycode == "MH") selected @endif>Marshall Islands 🇲🇭</option>
                                                <option value="MK" @if($edit->customer_countrycode == "MK") selected @endif>Macedonia 🇲🇰</option>
                                                <option value="ML" @if($edit->customer_countrycode == "ML") selected @endif>Mali 🇲🇱</option>
                                                <option value="MT" @if($edit->customer_countrycode == "MT") selected @endif>Malta 🇲🇹</option>
                                                <option value="MM" @if($edit->customer_countrycode == "MM") selected @endif>Myanmar 🇲🇲</option>
                                                <option value="ME" @if($edit->customer_countrycode == "ME") selected @endif>Montenegro 🇲🇪</option>
                                                <option value="MN" @if($edit->customer_countrycode == "MN") selected @endif>Mongolia 🇲🇳</option>
                                                <option value="MZ" @if($edit->customer_countrycode == "MZ") selected @endif>Mozambique 🇲🇿</option>
                                                <option value="MR" @if($edit->customer_countrycode == "MR") selected @endif>Mauritania 🇲🇷</option>
                                                <option value="MU" @if($edit->customer_countrycode == "MU") selected @endif>Mauritius 🇲🇺</option>
                                                <option value="MW" @if($edit->customer_countrycode == "MW") selected @endif>Malawi 🇲🇼</option>
                                                <option value="MY" @if($edit->customer_countrycode == "MY") selected @endif>Malaysia 🇲🇾</option>
                                                <option value="NA" @if($edit->customer_countrycode == "NA") selected @endif>Namibia 🇳🇦</option>
                                                <option value="NE" @if($edit->customer_countrycode == "NE") selected @endif>Niger 🇳🇪</option>
                                                <option value="NG" @if($edit->customer_countrycode == "NG") selected @endif>Nigeria 🇳🇬</option>
                                                <option value="NI" @if($edit->customer_countrycode == "NI") selected @endif>Nicaragua 🇳🇮</option>
                                                <option value="NL" @if($edit->customer_countrycode == "NL") selected @endif>Netherlands 🇳🇱</option>
                                                <option value="NO" @if($edit->customer_countrycode == "NO") selected @endif>Norway 🇳🇴</option>
                                                <option value="NP" @if($edit->customer_countrycode == "NP") selected @endif>Nepal 🇳🇵</option>
                                                <option value="NR" @if($edit->customer_countrycode == "NR") selected @endif>Nauru 🇳🇷</option>
                                                <option value="NZ" @if($edit->customer_countrycode == "NZ") selected @endif>New Zealand 🇳🇿</option>
                                                <option value="OM" @if($edit->customer_countrycode == "OM") selected @endif>Oman 🇴🇲</option>
                                                <option value="PK" @if($edit->customer_countrycode == "PK") selected @endif>Pakistan 🇵🇰</option>
                                                <option value="PA" @if($edit->customer_countrycode == "PA") selected @endif>Panama 🇵🇦</option>
                                                <option value="PE" @if($edit->customer_countrycode == "PE") selected @endif>Peru 🇵🇪</option>
                                                <option value="PH" @if($edit->customer_countrycode == "PH") selected @endif>Philippines 🇵🇭</option>
                                                <option value="PW" @if($edit->customer_countrycode == "PW") selected @endif>Palau 🇵🇼</option>
                                                <option value="PG" @if($edit->customer_countrycode == "PG") selected @endif>Papua New Guinea 🇵🇬</option>
                                                <option value="PL" @if($edit->customer_countrycode == "PL") selected @endif>Poland 🇵🇱</option>
                                                <option value="KP" @if($edit->customer_countrycode == "KP") selected @endif>North Korea 🇰🇵</option>
                                                <option value="PT" @if($edit->customer_countrycode == "PT") selected @endif>Portugal 🇵🇹</option>
                                                <option value="PY" @if($edit->customer_countrycode == "PY") selected @endif>Paraguay 🇵🇾</option>
                                                <option value="QA" @if($edit->customer_countrycode == "QA") selected @endif>Qatar 🇶🇦</option>
                                                <option value="RO" @if($edit->customer_countrycode == "RO") selected @endif>Romania 🇷🇴</option>
                                                <option value="RU" @if($edit->customer_countrycode == "RU") selected @endif>Russia 🇷🇺</option>
                                                <option value="RW" @if($edit->customer_countrycode == "RW") selected @endif>Rwanda 🇷🇼</option>
                                                <option value="SA" @if($edit->customer_countrycode == "SA") selected @endif>Saudi Arabia 🇸🇦</option>
                                                <option value="SD" @if($edit->customer_countrycode == "SD") selected @endif>Sudan 🇸🇩</option>
                                                <option value="SN" @if($edit->customer_countrycode == "SN") selected @endif>Senegal 🇸🇳</option>
                                                <option value="SG" @if($edit->customer_countrycode == "SG") selected @endif>Singapore 🇸🇬</option>
                                                <option value="SB" @if($edit->customer_countrycode == "SB") selected @endif>Solomon Islands 🇸🇧</option>
                                                <option value="SL" @if($edit->customer_countrycode == "SL") selected @endif>Sierra Leone 🇸🇱</option>
                                                <option value="SV" @if($edit->customer_countrycode == "SV") selected @endif>El Salvador 🇸🇻</option>
                                                <option value="SM" @if($edit->customer_countrycode == "SM") selected @endif>San Marino 🇸🇲</option>
                                                <option value="SO" @if($edit->customer_countrycode == "SO") selected @endif>Somalia 🇸🇴</option>
                                                <option value="RS" @if($edit->customer_countrycode == "RS") selected @endif>Serbia 🇷🇸</option>
                                                <option value="SS" @if($edit->customer_countrycode == "SS") selected @endif>South Sudan 🇸🇸</option>
                                                <option value="ST" @if($edit->customer_countrycode == "ST") selected @endif>São Tomé and Príncipe 🇸🇹</option>
                                                <option value="SR" @if($edit->customer_countrycode == "SR") selected @endif>Suriname 🇸🇷</option>
                                                <option value="SK" @if($edit->customer_countrycode == "SK") selected @endif>Slovakia 🇸🇰</option>
                                                <option value="SI" @if($edit->customer_countrycode == "SI") selected @endif>Slovenia 🇸🇮</option>
                                                <option value="SE" @if($edit->customer_countrycode == "SE") selected @endif>Sweden 🇸🇪</option>
                                                <option value="SZ" @if($edit->customer_countrycode == "SZ") selected @endif>Swaziland 🇸🇿</option>
                                                <option value="SC" @if($edit->customer_countrycode == "SC") selected @endif>Seychelles 🇸🇨</option>
                                                <option value="SY" @if($edit->customer_countrycode == "SY") selected @endif>Syria 🇸🇾</option>
                                                <option value="TD" @if($edit->customer_countrycode == "TD") selected @endif>Chad 🇹🇩</option>
                                                <option value="TG" @if($edit->customer_countrycode == "TG") selected @endif>Togo 🇹🇬</option>
                                                <option value="TH" @if($edit->customer_countrycode == "TH") selected @endif>Thailand 🇹🇭</option>
                                                <option value="TJ" @if($edit->customer_countrycode == "TJ") selected @endif>Tajikistan 🇹🇯</option>
                                                <option value="TM" @if($edit->customer_countrycode == "TM") selected @endif>Turkmenistan 🇹🇲</option>
                                                <option value="TL" @if($edit->customer_countrycode == "TL") selected @endif>Timor-Leste 🇹🇱</option>
                                                <option value="TO" @if($edit->customer_countrycode == "TO") selected @endif>Tonga 🇹🇴</option>
                                                <option value="TT" @if($edit->customer_countrycode == "TT") selected @endif>Trinidad and Tobago 🇹🇹</option>
                                                <option value="TN" @if($edit->customer_countrycode == "TN") selected @endif>Tunisia 🇹🇳</option>
                                                <option value="TR" @if($edit->customer_countrycode == "TR") selected @endif>Turkey 🇹🇷</option>
                                                <option value="TV" @if($edit->customer_countrycode == "TV") selected @endif>Tuvalu 🇹🇻</option>
                                                <option value="TZ" @if($edit->customer_countrycode == "TZ") selected @endif>Tanzania 🇹🇿</option>
                                                <option value="UG" @if($edit->customer_countrycode == "UG") selected @endif>Uganda 🇺🇬</option>
                                                <option value="UA" @if($edit->customer_countrycode == "UA") selected @endif>Ukraine 🇺🇦</option>
                                                <option value="UY" @if($edit->customer_countrycode == "UY") selected @endif>Uruguay 🇺🇾</option>
                                                <option value="US" @if($edit->customer_countrycode == "US") selected @endif>United States 🇺🇸</option>
                                                <option value="UZ" @if($edit->customer_countrycode == "UZ") selected @endif>Uzbekistan 🇺🇿</option>
                                                <option value="VA" @if($edit->customer_countrycode == "VA") selected @endif>Vatican City 🇻🇦</option>
                                                <option value="VC" @if($edit->customer_countrycode == "VC") selected @endif>Saint Vincent and the Grenadines 🇻🇨</option>
                                                <option value="VE" @if($edit->customer_countrycode == "VE") selected @endif>Venezuela 🇻🇪</option>
                                                <option value="VN" @if($edit->customer_countrycode == "VN") selected @endif>Vietnam 🇻🇳</option>
                                                <option value="VU" @if($edit->customer_countrycode == "VU") selected @endif>Vanuatu 🇻🇺</option>
                                                <option value="WS" @if($edit->customer_countrycode == "WS") selected @endif>Samoa 🇼🇸</option>
                                                <option value="YE" @if($edit->customer_countrycode == "YE") selected @endif>Yemen 🇾🇪</option>
                                                <option value="ZA" @if($edit->customer_countrycode == "ZA") selected @endif>South Africa 🇿🇦</option>
                                                <option value="ZM" @if($edit->customer_countrycode == "ZM") selected @endif>Zambia 🇿🇲</option>
                                                <option value="ZW">Zimbabwe 🇿🇼</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                    <hr>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <h3 class="col-lg-12 mt-2">Informasi Akun</h3>
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Customer Status (Draft/Publish)</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input ml-3 pl-3" type="checkbox" value="1" name="customer_status" checked="checked">
                                        <span class="form-check-label fw-semibold text-muted">Publish</span>
                                    </label>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Customer Unique ID (Login)</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="id" class="form-control form-control-lg form-control-solid" disabled value="{{$edit->customer_uniqueid}}">
                                            <input type="hidden" name="customer_uniqueid" value="{{$edit->customer_uniqueid}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>


                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Password</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="password" name="password"  class="form-control form-control-lg form-control-solid">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Konfirmasi Password</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="password" name="password_confirmation"  class="form-control form-control-lg form-control-solid">
                                        </div>
                                        <!--end::Col-->
                                    </div>




                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Tambah</button>
                                </div>
                                <!--end::Actions-->
                           </form>

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
    $(document).ready(function(){
        if ($('#customertype').val() == 'Perusahaan')
      {
        $("#company").show();
      }
      else
      {
        $("#company").hide();
      }
    $('#customertype').on('change', function() {
      if ( this.value == 'Perusahaan')
      {
        $("#company").show();
      }
      else
      {
        $("#company").hide();
      }
    });
});
    </script>
@endsection
