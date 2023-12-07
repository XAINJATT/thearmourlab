@extends('admin.layouts.app')
@section('content')
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
                    <form action="{{route('admin.blog.update')}}" id="addDriverForm" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="blog_id" value="{{$blogs->id}}" />
                        <input type="hidden" name="old_image" value="{{$blogs->image}}" />
                        {{-- <input type="hidden" name="old_blog_writer_picture" value="{{$blogs->blog_writer_picture}}" /> --}}

                        <div class="card mb-3">
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                    <div>
                                        <h4 class="mb-3 mb-md-0">Blogs > <span class="text-secondary">
                                                Edit Blog</span>
                                        </h4>
                                    </div>
                                    <button type="button" class="btn btn-secondary ml-auto" onclick="window.location.replace('{{ route('admin.blog')  }}');">Back
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body pb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" value="{{ $blogs->title }}" placeholder="Enter Title" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="blog_writer_name" class="font-weight-bold">Blog Writer Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="blog_writer_name" name="blog_writer_name" value="{{ $blogs->blog_writer_name }}" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="-text-" class="font-weight-bold">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="description" name="description">{{ $blogs->description }}</textarea>
                                    </div>

                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="image" class="font-weight-bold">Blog Image <span class="text-danger">*</span>&nbsp;&nbsp;
                                            <a href="{{ $blogs->image }}" download="{{$blogs->image}}">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </label>
                                        <img src="" alt="" class="picture-src" id="image_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="image_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="image" onchange="ReadUrl(this, 'image_preview', 'image_browse');">
                                        </label>
                                    </div>

                                    {{-- <div class="col-12 col-md-6 mb-3">
                                        <label for="blog_writer_picture" class="font-weight-bold">Blog Writer Picture <span class="text-danger">*</span>&nbsp;&nbsp;
                                            <a href="{{ $blogs->blog_writer_picture }}" download="{{$blogs->blog_writer_picture}}">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </label>
                                        <img src="" alt="" class="picture-src" id="blog_writer_picture_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="blog_writer_picture_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="blog_writer_picture" onchange="ReadUrl(this, 'blog_writer_picture_preview', 'blog_writer_picture_browse');">
                                        </label>
                                    </div> --}}
                                </div>
                            </div>
                            <hr>
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-light px-4 py-2" onclick="window.location.href='{{route('admin.blog')}}'">
                                            Cancel
                                        </button>
                                        <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                            <i class="fa-solid fa-floppy-disk"></i> Save Blog
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