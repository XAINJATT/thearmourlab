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
                        <form action="{{ route('admin.contest.store') }}" id="addContestForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card mb-3">

                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <div>
                                            <h4 class="mb-3 mb-md-0">Contests > <span class="text-secondary">
                                                    Create contest</span>
                                            </h4>
                                        </div>
                                        <button type="button" class="btn btn-secondary ml-auto"
                                            onclick="window.location.replace('{{ route('admin.contests') }}');">Back
                                        </button>
                                    </div>
                                </div>

                                <hr>

                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-bold text-black">
                                                Title  <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="price" class="font-weight-bold">
                                                Start Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                                            @if ($errors->has('start_date'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('start_date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label for="price" class="font-weight-bold">
                                                End Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                                            @if ($errors->has('end_date'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('end_date') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        
                                        <div class="col-md-12 mt-2">
                                            <label for="description" class="font-weight-bold">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" rows="3" required></textarea>
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-12 col-md-6 mt-2">
                                            <label for="contest_image" class="font-weight-bold">Contest Image 
                                            <span class="text-danger">*</span></label>
                                            <img src="" alt="" class="picture-src" id="contest_image_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                                            <label class="form-control label-style" id="contest_image_browse">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <span><i class="fa fa-2x fa-camera"></i></span>
                                                    <span>&nbsp;Browse</span>
                                                </span>
                                                <input type="file" class="input-style" name="contest_image" onchange="ReadUrl(this, 'contest_image_preview', 'contest_image_browse');">
                                            </label>
                                            @if ($errors->has('contest_image'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('contest_image') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="col-md-6 mt-2">
                                            <label for="-text-" class="font-weight-bold">
                                                Status <span class="text-danger">*</span></label>
                                            <select class="form-select" name="is_active" id="is_active">
                                                <option value="">--please select--</option>
                                                <option value="1">Start</option>
                                                <option value="0">Finish</option>
                                            </select>
                                            @if ($errors->has('is_active'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('is_active') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <hr>

                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-light px-4 py-2"
                                                onclick="window.location.href='{{ route('admin.contests') }}'">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa-solid fa-floppy-disk"></i> Save contest
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
