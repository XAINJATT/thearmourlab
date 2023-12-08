@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif
    <style>
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
    <div class="page-content">

        <section class="contact-area pb-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 col-md-8 mt-3">
                        <form action="{{ route('admin.user.store') }}" id="addDriverForm" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="card mb-3">
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <div>
                                            <h4 class="mb-3 mb-md-0">Users > <span class="text-secondary">
                                                    Create User</span>
                                            </h4>
                                        </div>
                                        <button type="button" class="btn btn-secondary ml-auto"
                                            onclick="window.location.replace('{{ route('admin.user') }}');">Back
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="font-weight-bold text-black">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="first_name"
                                                placeholder="Enter First Name" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="font-weight-bold text-black">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="last_name"
                                                placeholder="Enter Last Name" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="-email-" class="font-weight-bold">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="-email-"
                                                placeholder="Enter Email"
                                                onchange="CheckForAdvanceDuplicateEmail('', this.value);"
                                                value="{{ old('email') }}" required>
                                            <span class="error d-none duplicateEmailError" id="duplicateEmailError">Email
                                                address already exists!</span>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="font-weight-bold">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="Enter Phone Number" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="font-weight-bold">Password <span
                                                    class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>

                                        {{-- <div class="col-12 mb-3">
                                        <label for="-address-" class="font-weight-bold">Home Address <span class="text-danger">*</span></label>
                                        <input class="form-control addressField" name="address" id="-address-" required>
                                    </div> --}}

                                        {{-- <div class="col-12 col-md-6 mb-3">
                                        <label for="profile_image" class="font-weight-bold">Profile Picture <span class="text-danger">*</span></label>
                                        <img src="" alt="" class="picture-src" id="profile_image_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="profile_image_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="profile_image" onchange="ReadUrl(this, 'profile_image_preview', 'profile_image_browse');" required>
                                        </label>
                                    </div> --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-light px-4 py-2"
                                                onclick="window.location.href='{{ route('admin.user') }}'">
                                                Cancel
                                            </button>
                                            <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                                <i class="fa-solid fa-floppy-disk"></i> Save User
                                            </button>
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
