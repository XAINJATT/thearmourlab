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
                    <form action="{{route('admin.product.store')}}" id="addProductForm" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card mb-3">
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                    <div>
                                        <h4 class="mb-3 mb-md-0">Products > <span class="text-secondary">
                                                Create Product</span>
                                        </h4>
                                    </div>
                                    <button type="button" class="btn btn-secondary ml-auto" onclick="window.location.replace('{{ route('admin.product')  }}');">Back
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body pb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price" class="font-weight-bold">Price <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="price" name="price" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="-text-" class="font-weight-bold">Discounted Price <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="discounted_price" name="discounted_price" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="soh" class="font-weight-bold">SOH <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="soh" name="soh" required>
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label for="description" class="font-weight-bold">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" rows="3" required></textarea>
                                    </div>

                                    <div class="col-12 col-md-6 mt-2">
                                        <label for="product_image" class="font-weight-bold">Product Image <span class="text-danger">*</span></label>
                                        <img src="" alt="" class="picture-src" id="product_image_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="product_image_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="product_image" onchange="ReadUrl(this, 'product_image_preview', 'product_image_browse');" required>
                                        </label>
                                    </div>

                                    <div class="col-md-6 mt-2">
                                        <label for="other_images-" class="font-weight-bold">Product Images <span
                                                    class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="other_images[]" id="other_images-" multiple/>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-light px-4 py-2" onclick="window.location.href='{{route('admin.product')}}'">
                                            Cancel
                                        </button>
                                        <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                            <i class="fa-solid fa-floppy-disk"></i> Save Product
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