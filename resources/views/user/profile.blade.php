@extends('admin.layouts.app')
@section('content')
<style>
    .card hr {
        color: #adb35b !important;
        height: 2px !important;
        width: 100% !important;
    }

    .label-style {
        border: 1px solid grey;
        border-radius: 7px;
        padding: 42px 33px;
    }

    .input-style {
        border: 1px grey !important;
        padding: 35px 10px 29px 0;
        display: none;
    }

    form div {
        margin-bottom: 0;
    }
</style>
<div class="content container-fluid">
    {{--Section--}}
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success-message'))
                    <div class="alert alert-success">
                        {{ session('success-message') }}
                    </div>
                    @elseif(session()->has('error-message'))
                    <div class="alert alert-danger">
                        {{ session('error-message') }}
                    </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ isset($users->profile_image) ? asset(@$users->profile_image) : asset('assets/img/avatars/1.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ @$users->first_name }} {{ @$users->last_name }}</h5>
                            <p class="text-muted mb-1">
                            </p>
                            <p class="text-muted mb-4">{{ @$users->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <form action="{{route('profile.update')}}" id="addDriverForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$users->id}}" />
                        <input type="hidden" name="old_profile_image" value="{{$users->profile_image}}" />
                        <div class="card mb-4">
                            <div class="card-body pb-2">
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <div>
                                            <h4 class="mb-3 mb-md-0">Profile > <span class="text-secondary">
                                                    Edit Profile</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="{{ $users->first_name }}" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="{{ $users->last_name }}" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="-email-" class="font-weight-bold">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" id="-email-" placeholder="Enter Email" value="{{ $users->email }}" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold">Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ $users->phone }}" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="font-weight-bold">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="-address-" class="font-weight-bold">Home Address <span class="text-danger">*</span></label>
                                        <input class="form-control addressField" name="address" id="-address-" value="{{ $users->address }}" required>
                                    </div>

                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="profile_image" class="font-weight-bold">Profile Picture <span class="text-danger">*</span>&nbsp;&nbsp;
                                            <a href="{{ $users->profile_image }}" download="{{$users->profile_image}}">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </label>
                                        <img src="" alt="" class="picture-src" id="profile_image_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="profile_image_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="profile_image" onchange="ReadUrl(this, 'profile_image_preview', 'profile_image_browse');">
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                                <i class="fa-solid fa-floppy-disk"></i> Update Profile
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection