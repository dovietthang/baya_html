@extends('layout-admin.layout-base')
@section('title')
    <title>{{__('Edit')}}</title>
@endsection
@section('page-css')
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin_asset/app-assets/css/plugins/forms/form-validation.css')}}">
@endsection
@if(@$breadcrumb)
@section('bcb')
    @include('breadcrumbs.breadcrumbs', $breadcrumb)
@endsection
@endif
@section('content')
    <div class="blog-edit-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Form -->
                        <form action="{{route('update-user')}}" method="post" enctype="multipart/form-data"
                              class="mt-2">
                            @csrf
                            <input type="hidden" value="{{$user->id}}" name="id">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="full-name">{{__('Name')}}</label>
                                        <input
                                            type="text"
                                            id="full-name"
                                            class="form-control"
                                            name="fullname"
                                            placeholder="join"
                                            value="{{$user->name}}"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="user-email">{{__('Email')}}</label>
                                        <input
                                            type="email"
                                            id="user-email"
                                            class="form-control"
                                            name="email"
                                            placeholder="join@gmail.com"
                                            value="{{$user->email}}"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="user-status"
                                              >{{__('Status')}}</label>
                                        <select class="form-select" id="user-status" name="status">
                                            <option value="1" @if($user->status == 1) selected @endif >{{__('Activate')}}</option>
                                            <option value="0" @if($user->status == 0) selected @endif >{{__('Inactive')}}</option>
                                        </select>
                                    </div>
                                </div>
                                @if(Auth::user()->role  <= 1 && Auth::user()->id != $user->id)
                                    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="user-role">{{__('Role')}}</label>
                                            <select class="form-select" id="user-role" name="role">
                                                @if(Auth::user()->role == 0)
                                                    <option value="1" @if($user->role == 1) selected @endif>{{__('Admin')}}</option>
                                                @endif
                                                <option value="2" @if($user->role == 2) selected @endif>{{__('Mod')}}</option>
                                                <option value="3" @if($user->role == 3) selected @endif>{{__('Member')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="user-role">{{__('Role')}}</label>
                                            <select class="form-select" id="user-role" disabled>
                                                <option value="0" @if($user->role == 1) selected @endif>{{__('System Admin')}}</option>
                                                <option value="1" @if($user->role == 1) selected @endif>{{__('Admin')}}</option>
                                                <option value="2" @if($user->role == 2) selected @endif>{{__('Mod')}}</option>
                                                <option value="3" @if($user->role == 3) selected @endif>{{__('Member')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6 col-12">
                                    <div class="mb-2 in">
                                        <label class="form-label" for="user-password">{{__('Password')}}</label>
                                        <div class="input-group form-password-toggle">
                                            <button class="btn btn-outline-primary waves-effect" id="create-password"
                                                    type="button">{{__('Create')}}
                                            </button>
                                            <input
                                                placeholder="*******"
                                                type="password"
                                                id="user-password"
                                                class="form-control"
                                                name="password"
                                            />
                                            <span class="input-group-text cursor-pointer" id="eye-user">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-eye font-small-4"><path
                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">{{__('Photo')}}</h4>
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="featured-info">
                                                <small class="text-muted"></small>
                                                <p class="my-50">
                                                    <a href="#" id="blog-image-text"></a>
                                                </p>
                                                <div class="d-inline-block">
                                                    <input class="form-control blog_CustomFile" type="file" name="photo"
                                                           id="blogCustomFile" accept="image/*"/>
                                                </div>
                                            </div>
                                            <div class="fix-img mt-1 mt-md-0 ms-md-2 mb-md-0">
                                                @if($user->photo != '' || $user->photo != null)
                                                    <img
                                                        src="{{$user->photo}}"
                                                        id="blog-feature-image"
                                                        class="rounded"
                                                        alt="Blog Featured Image"
                                                    />
                                                @else
                                                    <img
                                                        src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                        id="blog-feature-image"
                                                        class="rounded"
                                                        alt="Blog Featured Image"
                                                    />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-50 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1"
                                            >{{__('Save')}}</button>
                                    <button type="reset" class="btn btn-outline-secondary">{{__('Cancel')}}</button>
                                </div>
                            </div>
                        </form>
                        <!--/ Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('vendor-js')
    <script src="{{asset('admin_asset/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection
@section('page-js')
    <script src="{{asset('admin_asset/assets/js/default.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/ajax-users.js')}}"></script>
@endsection
