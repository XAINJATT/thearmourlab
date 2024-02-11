@extends('admin.layouts.app')
@section('content')
@if (!auth()->user()->isAdmin())
@php(abort(403))
@endif
<section class="contact-area pb-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-12 mt-3">
                <form action="{{ route('admin.language.update',$id) }}" id="editFaqForm" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card mb-3">
                        <div class="card-header" style="padding: 0.5rem 1.5rem">
                            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                <div>
                                    <h4 class="mb-3 mb-md-0">Translation > <span class="text-secondary">
                                            Edit Translation</span>
                                    </h4>
                                </div>
                                <button type="button" class="btn btn-secondary ml-auto" onclick="window.location.replace('{{ route('admin.language') }}');">Back
                                </button>
                            </div>

                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="col-lg-12  p-0">
                                <table class=" table table table-striped table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Key Word</th>
                                            <th>Translation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($translations as $key=>$value)
                                        <tr>
                                            <td width="25%">
                                                {{$key}}
                                            </td>
                                            <td width="50%">
                                                <textarea name="trans[{{$key}}]" class="form-control" rows="4" cols="50"required>
                                                    {{$value}}
                                                </textarea>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="card-header" style="padding: 0.5rem 1.5rem">
                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-light px-4 py-2" onclick="window.location.href='{{ route('admin.language') }}'">
                                        Cancel
                                    </button>
                                    <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                        <i class="fa-solid fa-floppy-disk"></i> Save
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
@endsection
@section('scripts')
<script src="{{url('js/admin/translations.js')}}"></script>
@endsection