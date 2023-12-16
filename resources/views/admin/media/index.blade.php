@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif
    <!-- Contact Start -->
    <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('success-message'))
                            <div class="alert alert-success">
                                {{ session('success-message') }}
                            </div>
                        @elseif(session()->has('error-message'))
                            <div class="alert alert-danger">
                                {{ session('error-message') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-12 mb-12">
                        <div class="card">
                            <div class="card-header row">
                                <h6 class="text-uppercase mb-0 col-10">HERE ARE ALL MEdia </h6>
                                <a style="min-width:250px" href="{{ route('admin.media.create') }}"
                                    class="btn btn-primary col-2 float-right">Add
                                    New Media</a>
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="data_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Show in Gallery</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($medias as $value)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    @if (str_contains($value->type, 'image'))
                                                        {{-- Display Image --}}
                                                        <img src="{{ Storage::url($value->path) }}" alt="MEdia Image"
                                                            style="width:100px; height:100px;">
                                                    @elseif(str_contains($value->type, 'video'))
                                                        {{-- Display Video --}}
                                                        <video width="320" height="240" controls>
                                                            <source src="{{ Storage::url($value->path) }}"
                                                                type="{{ $value->type }}">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @endif
                                                </td>
                                                <td>{{ config('app.services')[$value->category] }}</td>
                                                <td>{{ $value->is_gallery }}</td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <a onclick="mediaStatus({{ $value->id }})">
                                                            <span class="badge bg-success cursor-pointer">Active</span>
                                                        </a>
                                                    @elseif($value->status == 0)
                                                        <button onclick="mediaStatus({{ $value->id }})">
                                                            <span class="badge bg-danger cursor-pointer">Inactive</span>
                                                        </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <input type="text" hidden id="myInput{{ $loop->iteration }}"
                                                        value="{{ url(Storage::url($value->path)) }}">
                                                    <div class="btn-group">
                                                        <button data-value="myInput{{ $loop->iteration }}"
                                                            data-text="Copied!" onclick="copy(this)"
                                                            class="btn btn-info">Copy Url</button>
                                                        <a onclick="Deletemedia({{ $value->id }})"
                                                            class="cursor-pointer btn btn-danger text-white"><i class="fa fa-trash"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@section('scripts')
    <script>
        function Deletemedia(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef3737',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ url('admin/media/delete') }}" + '/' + id, // Pass the product parameter
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your media has been deleted.',
                                    'success'
                                ).then(() => {
                                    // Reload the page after a short delay (e.g., 0 seconds)
                                    setTimeout(() => {
                                        location.reload();
                                    }, 0);
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the item.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'An error occurred while deleting the item.',
                                'error'
                            );
                        }
                    });
                }
            });
        }

        function mediaStatus(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef3737',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, update media status!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.media.status', ['id' => ':id']) }}".replace(':id',
                            id),
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Status Updated!',
                                    'Media status has been updated.',
                                    'success'
                                ).then(() => {
                                    // Reload the page after a short delay (e.g., 0 seconds)
                                    setTimeout(() => {
                                        location.reload();
                                    }, 0);
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    response.message ||
                                    'An error occurred while updating the status.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'An error occurred while updating the status.',
                                'error'
                            );
                        }
                    });
                }
            });
        }
    </script>
@endsection
