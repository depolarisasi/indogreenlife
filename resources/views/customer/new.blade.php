@extends('layouts.app')
@section('title','Tambah Customer - PT Indo Greenlife Harvest ')
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
                        <li class="breadcrumb-item  fw-bold lh-1">Tambah Customer</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Toolbar wrapper=-->
                <!--begin::Toolbar wrapper=-->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">

                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Tambah Customer
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">Tambah Customer</span>
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
                            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('customer/store')}}" method="post"  enctype="multipart/form-data">
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
                                                <option value="Perorangan">Perorangan</option>
                                                <option value="Perusahaan">Perusahaan</option>
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
                                                <option value="" selected> - </option>
                                                <option value="Tuan">Tuan / Tn</option>
                                                <option value="Nyonya">Nyonya / Ny</option>
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
                                                    <input type="text" name="customer_name" class="form-control form-control-lg form-control-solid" placeholder="Nama Lengkap Customer">
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
                                                    <input type="text" name="customer_nik" maxlength="16" class="form-control form-control-lg form-control-solid" placeholder="NIK / ID">
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
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="customer_npwp" maxlength="16" class="form-control form-control-lg form-control-solid" placeholder="NPWP Pribadi">
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
                                            <input type="email" name="customer_email" class="form-control form-control-lg form-control-solid" placeholder="Alamat Email Pribadi">
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
                                            <input type="tel" name="customer_nohp" maxlength="16" class="form-control form-control-lg form-control-solid" placeholder="Nomor Telepon">
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
                                            <textarea name="customer_address" class="form-control form-control-lg form-control-solid" placeholder="Alamat Pribadi"> </textarea>
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
                                                    <input type="text" name="customer_company" class="form-control form-control-lg form-control-solid" placeholder="Nama Perusahaan">
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
                                                    <input type="text" name="customer_companynib" maxlength="13"  class="form-control form-control-lg form-control-solid" placeholder="NIB Perusahaan">
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
                                                    <input type="text" name="customer_companynpwp" maxlength="16"  class="form-control form-control-lg form-control-solid" placeholder="NPWP Perusahaan">
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
                                                <option value="" selected> - </option>
                                                <option value="PKP">Pengusaha Kena Pajak (PKP)</option>
                                                <option value="NON PKP">Non Pengusaha Kena Pajak (PKP)</option>
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
                                            <textarea name="customer_companyaddress" class="form-control form-control-lg form-control-solid"></textarea>
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
                                            <textarea name="customer_companyaddress2" class="form-control form-control-lg form-control-solid"></textarea>
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
                                            <input type="tel" name="customer_companytelp" maxlength="16" class="form-control form-control-lg form-control-solid" placeholder="Nomor Telepon Perusahaan">
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
                                            <input type="email" name="customer_companyemail" class="form-control form-control-lg form-control-solid" placeholder="Email Perusahaan">
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
                                                    <input type="text" name="customer_companyhaki" class="form-control form-control-lg form-control-solid" placeholder="HAKI Perusahaan">
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
                                        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{asset('assets/media/svg/avatars/blank.svg')}})">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-pencil fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="foto" accept=".png, .jpg, .jpeg">
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
                                                <option value="AF">Afghanistan 🇦🇫</option>
                                                <option value="AO">Angola 🇦🇴</option>
                                                <option value="AL">Albania 🇦🇱</option>
                                                <option value="AD">Andorra 🇦🇩</option>
                                                <option value="AE">United Arab Emirates 🇦🇪</option>
                                                <option value="AR">Argentina 🇦🇷</option>
                                                <option value="AM">Armenia 🇦🇲</option>
                                                <option value="AG">Antigua and Barbuda 🇦🇬</option>
                                                <option value="AU">Australia 🇦🇺</option>
                                                <option value="AT">Austria 🇦🇹</option>
                                                <option value="AZ">Azerbaijan 🇦🇿</option>
                                                <option value="BI">Burundi 🇧🇮</option>
                                                <option value="BE">Belgium 🇧🇪</option>
                                                <option value="BJ">Benin 🇧🇯</option>
                                                <option value="BF">Burkina Faso 🇧🇫</option>
                                                <option value="BD">Bangladesh 🇧🇩</option>
                                                <option value="BG">Bulgaria 🇧🇬</option>
                                                <option value="BH">Bahrain 🇧🇭</option>
                                                <option value="BS">Bahamas 🇧🇸</option>
                                                <option value="BA">Bosnia and Herzegovina 🇧🇦</option>
                                                <option value="BY">Belarus 🇧🇾</option>
                                                <option value="BZ">Belize 🇧🇿</option>
                                                <option value="BO">Bolivia 🇧🇴</option>
                                                <option value="BR">Brazil 🇧🇷</option>
                                                <option value="BB">Barbados 🇧🇧</option>
                                                <option value="BN">Brunei 🇧🇳</option>
                                                <option value="BT">Bhutan 🇧🇹</option>
                                                <option value="BW">Botswana 🇧🇼</option>
                                                <option value="CF">Central African Republic 🇨🇫</option>
                                                <option value="CA">Canada 🇨🇦</option>
                                                <option value="CH">Switzerland 🇨🇭</option>
                                                <option value="CL">Chile 🇨🇱</option>
                                                <option value="CN">China 🇨🇳</option>
                                                <option value="CI">Ivory Coast 🇨🇮</option>
                                                <option value="CM">Cameroon 🇨🇲</option>
                                                <option value="CD">DR Congo 🇨🇩</option>
                                                <option value="CG">Republic of the Congo 🇨🇬</option>
                                                <option value="CO">Colombia 🇨🇴</option>
                                                <option value="KM">Comoros 🇰🇲</option>
                                                <option value="CV">Cape Verde 🇨🇻</option>
                                                <option value="CR">Costa Rica 🇨🇷</option>
                                                <option value="CU">Cuba 🇨🇺</option>
                                                <option value="CY">Cyprus 🇨🇾</option>
                                                <option value="CZ">Czechia 🇨🇿</option>
                                                <option value="DE">Germany 🇩🇪</option>
                                                <option value="DJ">Djibouti 🇩🇯</option>
                                                <option value="DM">Dominica 🇩🇲</option>
                                                <option value="DK">Denmark 🇩🇰</option>
                                                <option value="DO">Dominican Republic 🇩🇴</option>
                                                <option value="DZ">Algeria 🇩🇿</option>
                                                <option value="EC">Ecuador 🇪🇨</option>
                                                <option value="EG">Egypt 🇪🇬</option>
                                                <option value="ER">Eritrea 🇪🇷</option>
                                                <option value="ES">Spain 🇪🇸</option>
                                                <option value="EE">Estonia 🇪🇪</option>
                                                <option value="ET">Ethiopia 🇪🇹</option>
                                                <option value="FI">Finland 🇫🇮</option>
                                                <option value="FJ">Fiji 🇫🇯</option>
                                                <option value="FR">France 🇫🇷</option>
                                                <option value="FM">Micronesia 🇫🇲</option>
                                                <option value="GA">Gabon 🇬🇦</option>
                                                <option value="GB">United Kingdom 🇬🇧</option>
                                                <option value="GE">Georgia 🇬🇪</option>
                                                <option value="GH">Ghana 🇬🇭</option>
                                                <option value="GN">Guinea 🇬🇳</option>
                                                <option value="GM">Gambia 🇬🇲</option>
                                                <option value="GW">Guinea-Bissau 🇬🇼</option>
                                                <option value="GQ">Equatorial Guinea 🇬🇶</option>
                                                <option value="GR">Greece 🇬🇷</option>
                                                <option value="GD">Grenada 🇬🇩</option>
                                                <option value="GT">Guatemala 🇬🇹</option>
                                                <option value="GY">Guyana 🇬🇾</option>
                                                <option value="HN">Honduras 🇭🇳</option>
                                                <option value="HR">Croatia 🇭🇷</option>
                                                <option value="HT">Haiti 🇭🇹</option>
                                                <option value="HU">Hungary 🇭🇺</option>
                                                <option value="ID" selected>Indonesia 🇮🇩</option>
                                                <option value="IN">India 🇮🇳</option>
                                                <option value="IE">Ireland 🇮🇪</option>
                                                <option value="IR">Iran 🇮🇷</option>
                                                <option value="IQ">Iraq 🇮🇶</option>
                                                <option value="IS">Iceland 🇮🇸</option>
                                                <option value="IL">Israel 🇮🇱</option>
                                                <option value="IT">Italy 🇮🇹</option>
                                                <option value="JM">Jamaica 🇯🇲</option>
                                                <option value="JO">Jordan 🇯🇴</option>
                                                <option value="JP">Japan 🇯🇵</option>
                                                <option value="KZ">Kazakhstan 🇰🇿</option>
                                                <option value="KE">Kenya 🇰🇪</option>
                                                <option value="KG">Kyrgyzstan 🇰🇬</option>
                                                <option value="KH">Cambodia 🇰🇭</option>
                                                <option value="KI">Kiribati 🇰🇮</option>
                                                <option value="KN">Saint Kitts and Nevis 🇰🇳</option>
                                                <option value="KR">South Korea 🇰🇷</option>
                                                <option value="KW">Kuwait 🇰🇼</option>
                                                <option value="LA">Laos 🇱🇦</option>
                                                <option value="LB">Lebanon 🇱🇧</option>
                                                <option value="LR">Liberia 🇱🇷</option>
                                                <option value="LY">Libya 🇱🇾</option>
                                                <option value="LC">Saint Lucia 🇱🇨</option>
                                                <option value="LI">Liechtenstein 🇱🇮</option>
                                                <option value="LK">Sri Lanka 🇱🇰</option>
                                                <option value="LS">Lesotho 🇱🇸</option>
                                                <option value="LT">Lithuania 🇱🇹</option>
                                                <option value="LU">Luxembourg 🇱🇺</option>
                                                <option value="LV">Latvia 🇱🇻</option>
                                                <option value="MA">Morocco 🇲🇦</option>
                                                <option value="MC">Monaco 🇲🇨</option>
                                                <option value="MD">Moldova 🇲🇩</option>
                                                <option value="MG">Madagascar 🇲🇬</option>
                                                <option value="MV">Maldives 🇲🇻</option>
                                                <option value="MX">Mexico 🇲🇽</option>
                                                <option value="MH">Marshall Islands 🇲🇭</option>
                                                <option value="MK">Macedonia 🇲🇰</option>
                                                <option value="ML">Mali 🇲🇱</option>
                                                <option value="MT">Malta 🇲🇹</option>
                                                <option value="MM">Myanmar 🇲🇲</option>
                                                <option value="ME">Montenegro 🇲🇪</option>
                                                <option value="MN">Mongolia 🇲🇳</option>
                                                <option value="MZ">Mozambique 🇲🇿</option>
                                                <option value="MR">Mauritania 🇲🇷</option>
                                                <option value="MU">Mauritius 🇲🇺</option>
                                                <option value="MW">Malawi 🇲🇼</option>
                                                <option value="MY">Malaysia 🇲🇾</option>
                                                <option value="NA">Namibia 🇳🇦</option>
                                                <option value="NE">Niger 🇳🇪</option>
                                                <option value="NG">Nigeria 🇳🇬</option>
                                                <option value="NI">Nicaragua 🇳🇮</option>
                                                <option value="NL">Netherlands 🇳🇱</option>
                                                <option value="NO">Norway 🇳🇴</option>
                                                <option value="NP">Nepal 🇳🇵</option>
                                                <option value="NR">Nauru 🇳🇷</option>
                                                <option value="NZ">New Zealand 🇳🇿</option>
                                                <option value="OM">Oman 🇴🇲</option>
                                                <option value="PK">Pakistan 🇵🇰</option>
                                                <option value="PA">Panama 🇵🇦</option>
                                                <option value="PE">Peru 🇵🇪</option>
                                                <option value="PH">Philippines 🇵🇭</option>
                                                <option value="PW">Palau 🇵🇼</option>
                                                <option value="PG">Papua New Guinea 🇵🇬</option>
                                                <option value="PL">Poland 🇵🇱</option>
                                                <option value="KP">North Korea 🇰🇵</option>
                                                <option value="PT">Portugal 🇵🇹</option>
                                                <option value="PY">Paraguay 🇵🇾</option>
                                                <option value="QA">Qatar 🇶🇦</option>
                                                <option value="RO">Romania 🇷🇴</option>
                                                <option value="RU">Russia 🇷🇺</option>
                                                <option value="RW">Rwanda 🇷🇼</option>
                                                <option value="SA">Saudi Arabia 🇸🇦</option>
                                                <option value="SD">Sudan 🇸🇩</option>
                                                <option value="SN">Senegal 🇸🇳</option>
                                                <option value="SG">Singapore 🇸🇬</option>
                                                <option value="SB">Solomon Islands 🇸🇧</option>
                                                <option value="SL">Sierra Leone 🇸🇱</option>
                                                <option value="SV">El Salvador 🇸🇻</option>
                                                <option value="SM">San Marino 🇸🇲</option>
                                                <option value="SO">Somalia 🇸🇴</option>
                                                <option value="RS">Serbia 🇷🇸</option>
                                                <option value="SS">South Sudan 🇸🇸</option>
                                                <option value="ST">São Tomé and Príncipe 🇸🇹</option>
                                                <option value="SR">Suriname 🇸🇷</option>
                                                <option value="SK">Slovakia 🇸🇰</option>
                                                <option value="SI">Slovenia 🇸🇮</option>
                                                <option value="SE">Sweden 🇸🇪</option>
                                                <option value="SZ">Swaziland 🇸🇿</option>
                                                <option value="SC">Seychelles 🇸🇨</option>
                                                <option value="SY">Syria 🇸🇾</option>
                                                <option value="TD">Chad 🇹🇩</option>
                                                <option value="TG">Togo 🇹🇬</option>
                                                <option value="TH">Thailand 🇹🇭</option>
                                                <option value="TJ">Tajikistan 🇹🇯</option>
                                                <option value="TM">Turkmenistan 🇹🇲</option>
                                                <option value="TL">Timor-Leste 🇹🇱</option>
                                                <option value="TO">Tonga 🇹🇴</option>
                                                <option value="TT">Trinidad and Tobago 🇹🇹</option>
                                                <option value="TN">Tunisia 🇹🇳</option>
                                                <option value="TR">Turkey 🇹🇷</option>
                                                <option value="TV">Tuvalu 🇹🇻</option>
                                                <option value="TZ">Tanzania 🇹🇿</option>
                                                <option value="UG">Uganda 🇺🇬</option>
                                                <option value="UA">Ukraine 🇺🇦</option>
                                                <option value="UY">Uruguay 🇺🇾</option>
                                                <option value="US">United States 🇺🇸</option>
                                                <option value="UZ">Uzbekistan 🇺🇿</option>
                                                <option value="VA">Vatican City 🇻🇦</option>
                                                <option value="VC">Saint Vincent and the Grenadines 🇻🇨</option>
                                                <option value="VE">Venezuela 🇻🇪</option>
                                                <option value="VN">Vietnam 🇻🇳</option>
                                                <option value="VU">Vanuatu 🇻🇺</option>
                                                <option value="WS">Samoa 🇼🇸</option>
                                                <option value="YE">Yemen 🇾🇪</option>
                                                <option value="ZA">South Africa 🇿🇦</option>
                                                <option value="ZM">Zambia 🇿🇲</option>
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
                                            <input type="text" name="id" class="form-control form-control-lg form-control-solid" disabled value="{{$customer_uniqueid}}">
                                            <input type="hidden" name="customer_uniqueid" value="{{$customer_uniqueid}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>


                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Password</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="password" name="password" required class="form-control form-control-lg form-control-solid">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Konfirmasi Password</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="password" name="password_confirmation" required class="form-control form-control-lg form-control-solid">
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
