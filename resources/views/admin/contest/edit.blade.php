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
                        <form action="{{ route('admin.contest.update') }}" id="addContestForm" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="contest_id" value="{{ $contest->id }}" />
                            <input type="hidden" name="old_image" value="{{ $contest->image }}" />

                            <div class="card mb-3">
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <div>
                                            <h4 class="mb-3 mb-md-0">Contest > <span class="text-secondary">
                                                    Edit Contest</span>
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
                                            <input type="text" class="form-control" name="title" value="{{ $contest->title }}"  required placeholder="Enter Title">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="price" class="font-weight-bold">
                                                Start Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $contest->start_date }}"  required>
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label for="price" class="font-weight-bold">
                                                End Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $contest->end_date }}"  required>
                                        </div>

                                        
                                        <div class="col-md-12 mt-2">
                                            <label for="description" class="font-weight-bold">
                                                Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" rows="3" required>{{$contest->description}}</textarea>
                                        </div>

                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="image" class="font-weight-bold">
                                                Contest Image 
                                                <span class="text-danger">*</span> &nbsp;&nbsp;
                                                @if($contest->image)
                                                    <a href="{{ asset('storage/contest_image/'.$contest->image) }}" download="{{ asset('storage/contest_image/'.$contest->image) }}">
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                @endif
                                            </label>
                                            <img src="" alt="" class="picture-src"
                                                id="contest_image_preview" onclick="$(this).next().trigger('click')"
                                                style="width: 60%; display: none;">
                                            <label class="form-control label-style" id="contest_image_browse">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <span><i class="fa fa-2x fa-camera"></i></span>
                                                    <span>&nbsp;Browse</span>
                                                </span>
                                                <input type="file" class="input-style" name="image"
                                                    onchange="ReadUrl(this, 'contest_image_preview', 'contest_image_browse');">
                                            </label>
                                        </div>

                                        <div class="col-md-6 mt-2">
                                            <label for="-text-" class="font-weight-bold">
                                                Status <span class="text-danger">*</span></label>
                                            <select class="form-select" name="is_active" id="is_active">
                                                <option value="">--please select--</option>
                                                <option value="1" {{ $contest->is_active == 1 ? 'selected' : ''  }}>Start</option>
                                                <option value="0" {{ $contest->is_active == 0 ? 'selected' : ''  }}>Finish</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                
                                <hr>
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-light px-4 py-2" onclick="window.location.href='{{ route('admin.contests') }}'">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary submitBtn">
                                                <i class="fa-solid fa-floppy-disk"></i> Update Contest
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
