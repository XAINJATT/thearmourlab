@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif

    <!-- Testimonials Start -->
    <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                    <div class="col-md-12">
                        {{-- @include('partials.alerts') <!-- You can use a partial for session messages --> --}}
                    </div>
                    <div class="col-lg-12 mb-12">
                        <div class="card">
                            <div class="card-header row">
                                <h6 class="text-uppercase mb-0 col-10">All Testimonials</h6>
                                <a href="{{ route('admin.testimonials.create') }}"
                                    class="btn btn-primary col-2 float-right">Add New Testimonial</a>
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="data_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Profile Picture</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $testimonial)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->message }}</td>
                                                <td>
                                                    @if ($testimonial->profile_picture)
                                                        <img src="{{ asset('storage/' . $testimonial->profile_picture) }}"
                                                            alt="profile picture" width="100">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                        class="text-primary fs-6 mr-1" data-toggle="tooltip" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a onclick="DeleteTestimonial({{ $testimonial->id }})"
                                                        class="cursor-pointer">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
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
    <!-- Testimonials End -->
@endsection

@section('scripts')
    <script>
        function DeleteTestimonial(id) {
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
                        url: "{{ url('admin/testimonials/delete') }}" + '/' + id,
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: 'DELETE' // Specify the request method
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your testimonial has been deleted.',
                                    'success'
                                ).then(() => {
                                    setTimeout(() => {
                                        location.reload();
                                    }, 1000); // Reload the page after 1 second
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    response.message ||
                                    'An error occurred while deleting the testimonial.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'An error occurred while deleting the testimonial.',
                                'error'
                            );
                        }
                    });
                }
            });
        }


        // function productStatus(id) {
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#ef3737',
        //         cancelButtonColor: '#6c757d',
        //         confirmButtonText: 'Yes, update product status!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 type: "POST",
        //                 url: "{{ route('admin.product.statusUpdate', ['id' => ':id']) }}".replace(':id',
        //                     id),
        //                 data: {
        //                     _token: "{{ csrf_token() }}"
        //                 },
        //                 success: function(response) {
        //                     if (response.success) {
        //                         Swal.fire(
        //                             'Status Updated!',
        //                             'Product status has been updated.',
        //                             'success'
        //                         ).then(() => {
        //                             // Reload the page after a short delay (e.g., 0 seconds)
        //                             setTimeout(() => {
        //                                 location.reload();
        //                             }, 0);
        //                         });
        //                     } else {
        //                         Swal.fire(
        //                             'Error!',
        //                             response.message ||
        //                             'An error occurred while updating the status.',
        //                             'error'
        //                         );
        //                     }
        //                 },
        //                 error: function() {
        //                     Swal.fire(
        //                         'Error!',
        //                         'An error occurred while updating the status.',
        //                         'error'
        //                     );
        //                 }
        //             });
        //         }
        //     });
        // }
    </script>
@endsection
