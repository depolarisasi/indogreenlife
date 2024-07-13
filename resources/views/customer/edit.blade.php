@extends('layouts.app')
@section('title','Ubah Pengguna - PT Indo Greenlife Harvest ')
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
                        <li class="breadcrumb-item  fw-bold lh-1">Ubah User</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Toolbar wrapper=-->
                <!--begin::Toolbar wrapper=-->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">

                        <h1 class="page-heading d-flex  fw-bolder fs-2 flex-column justify-content-center my-0">Ubah Pengguna {{$edit->name}}
                        <!--begin::Description-->
                        <span class="page-desc  opacity-50 fs-6 fw-bold pt-4">Ubah Pengguna Sistem</span>
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
                            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('user/update')}}" method="post"  enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Profile Picture</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{asset($edit->foto)}});">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset($edit->foto)}});"></div>
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
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="name" class="form-control form-control-lg form-control-solid" value="{{$edit->name}}">
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
                                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" value="{{$edit->email}}">
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
                                            <input type="password" name="password" class="form-control form-control-lg form-control-solid">
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
                                            <input type="password" name="password_confirmation" class="form-control form-control-lg form-control-solid">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Nomor Handphone</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="nohp" class="form-control form-control-lg form-control-solid" value="{{$edit->nohp}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Nomor Induk</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="nohp" class="form-control form-control-lg form-control-solid" value="{{$edit->nomorinduk}}">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Divisi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="divisi" class="form-select form-select-sm form-select-solid">
                                                <option value="Marketing" @if($edit->divisi == "Marketing") selected @endif>Marketing</option>
                                                <option value="Production" @if($edit->divisi == "Production") selected @endif>Production</option>
                                                <option value="Regulator" @if($edit->divisi == "Regulator") selected @endif>Regulator</option>
                                                <option value="Warehouse" @if($edit->divisi == "Warehouse") selected @endif>Warehouse</option>
                                                <option value="Purcashing" @if($edit->divisi == "Purcashing") selected @endif>Purcashing</option>
                                                <option value="Finance" @if($edit->divisi == "Finance") selected @endif>Finance</option>
                                                <option value="Design" @if($edit->divisi == "Design") selected @endif>Design</option>
                                                <option value="Board of Director" @if($edit->divisi == "Board of Director") selected @endif>Board of Director</option>
                                                <option value="Administrator" @if($edit->divisi == "Administrator") selected @endif>Administrator</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                     <!--begin::Input group-->
                                     <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">User Roles</label>
                                        <!--end::Label-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="roles" class="form-select form-select-sm form-select-solid">
                                                <option value="{{$edit->roles}}">{{$edit->roles_name}}</option>
                                                @foreach ($roles as $role)
                                                <option value="{{$role->roles_id}}">{{$role->roles_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Ubah</button>
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
