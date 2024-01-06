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
                        <form action="{{ route('testimonials.store') }}" id="addTestimonialForm" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card mb-3">
                                <!-- Card Header -->
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <h4 class="mb-3 mb-md-0">Testimonials > <span class="text-secondary">Create
                                                Testimonial</span></h4>
                                        <button type="button" class="btn btn-secondary ml-auto"
                                            onclick="window.location.replace('{{ route('testimonials.index') }}');">Back</button>
                                    </div>
                                </div>
                                <hr>

                                <!-- Card Body -->
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <!-- Name -->
                                        <div class="col-md-6 mb-3">
                                            <label class="font-weight-bold text-black">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name" required>
                                        </div>

                                        <!-- Message -->
                                        <div class="col-md-12 mt-2">
                                            <label for="message" class="font-weight-bold">Message <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="message" rows="3" required></textarea>
                                        </div>

                                        <!-- Profile Picture -->
                                        <div class="col-12 col-md-6 mt-2">
                                            <label for="profile_picture" class="font-weight-bold">Profile Picture <span
                                                    class="text-danger">*</span></label>
                                            <img src="" alt="" class="picture-src"
                                                id="profile_picture_preview" onclick="$(this).next().trigger('click')"
                                                style="width: 60%; display: none;">
                                            <label class="form-control label-style" id="profile_picture_browse">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <span><i class="fa fa-2x fa-camera"></i></span>
                                                    <span>&nbsp;Browse</span>
                                                </span>
                                                <input type="file" class="input-style" name="profile_picture"
                                                    onchange="ReadUrl(this, 'profile_picture_preview', 'profile_picture_browse');"
                                                    required>
                                            </label>
                                        </div>

                                        <!-- Optional Additional Fields Here -->

                                    </div>
                                </div>
                                <hr>

                                <!-- Card Footer -->
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-light px-4 py-2"
                                                onclick="window.location.href='{{ route('testimonials.index') }}'">Cancel</button>
                                            <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                                <i class="fa-solid fa-floppy-disk"></i> Save Testimonial
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
